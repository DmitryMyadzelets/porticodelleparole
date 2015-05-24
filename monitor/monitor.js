
// Returns entire web page height
function page_height () {
    return Math.max(
        document.body.scrollHeight, document.documentElement.scrollHeight,
        document.body.offsetHeight, document.documentElement.offsetHeight,
        document.body.clientHeight, document.documentElement.clientHeight
    );
}

// Returns visible web page height
function view_height () {
    return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
}

// Returns ofsset of the visible web page from the top
function view_offset () {
    return window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
}


function ajax(url, data) {
    try {
        x = new(XMLHttpRequest || ActiveXObject)('Microsoft.XMLHTTP');
        x.open('POST', url, true);
        x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        x.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        x.send(data);

        console.log(x.responseText);

    } catch (e) {
        window.console && console.log(e);
    }
}

function log () {
    var url = 'monitor.php';
    var str = 'page_height=' + page_height() +
        '&view_height=' + view_height() +
        '&view_offset=' + view_offset();

    console.log(str);

    ajax(url, str);
}

setInterval(log, 3000);
