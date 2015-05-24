

// Returns an array of file names extracted from divs
function get_file_names() {
    var id, names = [];
    d3.select('div.files').selectAll('div').each(function () {
        id = d3.select(this).attr('id');
        names.push({
            file_name : id
        });
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

// Parses the ginen full date string and extracts date parts
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

// Get array of objects with file names
var objects = get_file_names();
// Extract year, month, day and ip from file names
extract_data(objects);

// ================================================================================================
// View of the the data

// Table
var table = d3.select('body').append('div').append('table');

var table_header = ['#', 'IP', 'Data', 'Time, sec'];
// Table rows
var tr = table.selectAll('tr')
    .data(objects)
    .enter()
    .append('tr')
    .on('mousedown', mousedown);

var td = tr.selectAll('td').data(function (d, index) {
    var date = [d.day, d.month, d.year].join('.');
    return [index + 1, d.ip, date, d.log ? d.log.length : null];
}).enter()
    .append('td')
    .text(function (d) { return d; });

// Table header
var th = table.insert('thead')
    .append('tr')
    .selectAll('th')
    .data(table_header)
    .enter()
    .append('th')
    .text(function (d) { return d; });

// Updated view for the given record
function udate_record_view(d) {
    var view;
    var date;
    table.selectAll('tr').each(function (v) {
        if (v === d) {
            console.log(d.log.length);
            view = d3.select(this);
            date = [d.day, d.month, d.year].join('.');
            view.selectAll('td')
                .data([null, d.ip, date, d.log ? d.log.length : null])
                .text(function (d) { return d; });
        }
    });
}

// Loads file for the given object
function get_log_file(d) {
    d3.text(d.file_name, 'text/plain', function (text) {
        // Get array of strings
        var data = text.split('\n');
        // Extract objects from each string
        var i = data.length;
        var o;
        while (i--) {
            o = data[i].split(',');
            o = {
                page_height : o[0],
                view_height : o[1],
                view_offset : o[2]
            }
            data[i] = o;
        }
        // Attach extracted log data to the root object
        d.log = data;
        udate_record_view(d);
    });
}

function get_all_logs(objects) {
    var i = objects.length;
    var o;
    while (i--) {
        o = objects[i];
        get_log_file(o);
    }
}

get_all_logs(objects);

function mousedown(d) {
    get_log_file(d);
}
