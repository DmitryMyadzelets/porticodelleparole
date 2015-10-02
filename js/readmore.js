
set_readmore(
    document.getElementById("olga_readmore"),
    document.getElementById("olga_readmore_btn"),
    'Leggi tutto', 'Meno'
);
set_readmore(
    document.getElementById("martina_readmore"),
    document.getElementById("martina_readmore_btn"),
    'Leggi tutto', 'Meno'
);


function set_readmore(text, btn, more, less) {
    more = more || 'Read more';
    less = less || 'Hide';
    btn.innerHTML = more;
    btn.onclick = function () {
        if (text.style.display === 'none') {
            text.style.display = 'inline';
            btn.innerHTML = less;
        } else {
            text.style.display = 'none';
            btn.innerHTML = more;
        }
    };
}
