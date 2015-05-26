

// Returns an array of file names extracted from divs
function get_file_names() {
    var id, names = [];
    var index = 0;
    d3.select('div.files').selectAll('div').each(function () {
        id = d3.select(this).attr('id');
        names.push({
            index : index++,
            file_name : id
        });
    });
    names.sort(function (a, b) {
        return a.index < b.index;
    });
    return names;
}

// Parses the given string for date and ip patterns.
// Invokes callback if they exist.
var parse_date_ip = (function () {
    var date_pattern = /\d{8}/;
    var ip_pattern = /\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/;
    var match, date, ip;

    return function (string, fun) {
        // Get full date substring        
        match = date_pattern.exec(string);
        if (!match) { return; }
        date = match[0];
        
        // Get ip substring
        match = ip_pattern.exec(string);
        if (!match) { return; }
        ip = match[0];

        if (typeof fun === 'function') {
            fun(date, ip);
        }
    };
}());

// Parses the given full date string and extracts date parts
var parse_date = (function () {
    var year_pattern = /\d{4}/;
    var month_pattern = /\d{2}/;
    var day_pattern = /\d{2}/;
    var match, year, month, day;
    return function (string, fun) {
        // Get year
        match = year_pattern.exec(string);
        if (!match) { return; }
        year = match[0];

        string = string.substring(year.length, string.length);

        // Get month
        match = month_pattern.exec(string);
        if (!match) { return; }
        month = match[0];

        string = string.substring(month.length, string.length);

        // Get day
        match = day_pattern.exec(string);
        if (!match) { return; }
        day = match[0];

        if (typeof fun === 'function') {
            fun(year, month, day);
        }
    };
}());

// Return array of objects with data extracted from the given array of strings
function extract_data(objects) {
    var i = objects.length;
    var o;
    var name;

    while(i--) {
        o = objects[i];
        if (typeof o !== 'object') { continue; }
        name = o.file_name;
        parse_date_ip(name, function (date, ip) {
            parse_date(date, function (year, month, day) {
                o.ip = ip;
                o.year = +year;
                o.month = +month;
                o.day = +day;
            });
        });
    }
}


// ================================================================================================
// View of the the data

function View (objects) {

        var self = this;

        // Table
        this.table = d3.select('body').append('div').append('table');

        var table_header = ['#', 'Date', 'IP', 'Time, sec', 'Moves'];

        // Returns array of table row data
        function get_tr_data (d) {
            var date = [d.day, d.month, d.year].join('.');
            var sec = d.log ? d.log.length : 0;
            var min = sec / 60 | 0;
            var hour = min / 60 | 0;
            min = min - hour * 60;
            sec = sec - hour * 3600 - min * 60;
            var duration = (hour ? hour + ':' : '') + (min ? min + ':' : '') + sec;
            return [d.index + 1, date, d.ip, duration, d.moves];
        }

        // Table rows
        var tr = this.table.selectAll('tr')
            .data(objects)
            .enter()
            .append('tr')
            .on('mousedown', mousedown);

        var td = tr.selectAll('td')
            .data(get_tr_data).enter()
            .append('td')
            .text(function (d) { return d; });

        // Table header
        var th = this.table.insert('thead')
            .append('tr')
            .selectAll('th')
            .data(table_header)
            .enter()
            .append('th')
            .text(function (d) { return d; });
    
        function mousedown(d) {
            // console.log(d.log);
            // console.log(d.seconds);
            self.update_chart(d);
        }

        this.update_datum = function (d) {
            var tr;
            var date;
            self.table.selectAll('tr').each(function (v) {
                if (v === d) {
                    tr = d3.select(this);
                    tr.selectAll('td')
                        .data(get_tr_data)
                        .text(function (d) { return d; });
                }
            });
        };

        // Screenshort image
        // '20150515_screenshot.png'
        var svg = d3.select('body')
            .append('div')
            .style('position', 'fixed')
            .style('width', '25%')
            .style('top', 0)
            .style('bottom', 0)
            .style('left', 0)
            .append("svg")
            .attr('width', '100%')
            .attr('height', '100%');
            // .style('border', '1px solid orange');

        var img = svg.append("image")
                .attr("xlink:href", "20150515_screenshot.png")
                // .attr('x', 0)
                .attr('y', 0)
                .attr('width', '100%')
                .attr('height', '100%');

        this.update_chart = function (datum) {
            svg.selectAll('line').remove();
            var seconds = datum.seconds;

            var box = svg.node().getBBox();
            var width = box.width;
            var height = box.height;
            var ratio_y = height / datum.page_height;
            var ratio_x = width / 10;
            var stroke_width = datum.view_height * ratio_y;

            var i = seconds.length;
            var x, y;
            while (i--) {
                x = (seconds[i].count * ratio_x);
                // x = x > width ? width : x;
                y = (seconds[i].offset + datum.view_height / 2) * ratio_y;
                svg.append('line')
                    .attr('x1', 0)
                    .attr('y1', y)
                    .attr('x2', x)
                    .attr('y2', y)
                    .attr('style', 'stroke:rgba(255,0,0,0.2); stroke-width:' + stroke_width);
            }
        };
}

// ================================================================================================
// Loads file for the given object
function pull_log_file(d, callback) {
    d3.text(d.file_name, 'text/plain', function (text) {
        // Get array of strings
        var data = text.split('\n');
        // Extract objects from each string
        var i = data.length;
        var o;
        while (i--) {
            o = data[i].split(',');
            o = {
                page_height : +o[0],
                view_height : +o[1],
                view_offset : +o[2]
            }
            data[i] = o;
        }
        data = data.filter(function (v) {
            return (
                !isNaN(v.page_height) &&
                !isNaN(v.view_height) &&
                !isNaN(v.view_offset)
                );
        });
        // Get page and view sizes from the first record
        if (data.length > 0) {
            d.page_height = data[0].page_height;
            d.view_height = data[0].view_height;
        }
        // Attach extracted log data to the root object
        d.log = data;
        if (typeof callback === 'function') {
            callback(d);
        }
    });
}

// ================================================================================================
// Create an array of objects:
// {
//     offset  : Number
//     count   : Number
// }
// where offset is the view offset, count - number of records for the offset
function count_seconds(data) {
    var inp = data.log, out = [];
    var i = 0, len = inp.length;
    var o;

    function add(i) {
        var o = {
            offset : inp[i].view_offset,
            count : 1
        };
        out.push(o);
        return o;
    }

    if (len > 0) {
        o = add(i);
        while (++i < len) {
            if (o.offset === inp[i].view_offset) {
                o.count += 1;
            } else {
                o = add(i);
            }
        }
    }
    data.seconds = out;
    data.moves = data.seconds.length - 1;
}

// ================================================================================================
// the App

// The data is an array of objects:
// {
//     index       : Number
//     file_name   : String
//     ip          : String
//     year        : Number
//     month       : Number
//     day         : Number
//     log         : Array
//     seconds     : Array
//     moves       : Number
// }
// 
// The log is an array of objects:
// {
//     page_height    : Number
//     view_height    : Number
//     view_offset    : Number
// }
// The seconds is an array of objects:
// {
//     offset      : Number
//     count       : Number
// }

// Get array of objects with file names
var data = get_file_names();
// Extract year, month, day and ip from file names
extract_data(data);

var view = new View(data);

function on_file_pulled(v) {
    // Make statistics
    count_seconds(v);
    // Update view
    view.update_datum(v);
}

// Get log data from the server
data.forEach(function (v) {
    pull_log_file(v, on_file_pulled);
});

