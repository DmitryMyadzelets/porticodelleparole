
set_readmore(
    document.getElementById('olga_readmore'),
    document.getElementById('olga_readmore_btn'),
    'Leggi tutto', 'Meno'
)
// set_readmore(
//     document.getElementById("martina_readmore"),
//     document.getElementById("martina_readmore_btn"),
//     'Leggi tutto', 'Meno'
// );
// set_readmore(
//     document.getElementById("ksenia_readmore"),
//     document.getElementById("ksenia_readmore_btn"),
//     'Leggi tutto', 'Meno'
// );
// set_readmore(
//     document.getElementById("liubov_readmore"),
//     document.getElementById("liubov_readmore_btn"),
//     'Leggi tutto', 'Meno'
// );
set_readmore(
    document.getElementById('yana_readmore'),
    document.getElementById('yana_readmore_btn'),
    'Leggi tutto', 'Meno'
)
set_readmore(
    document.getElementById('shkapa_readmore'),
    document.getElementById('shkapa_readmore_btn'),
    'Leggi tutto', 'Meno'
)
set_readmore(
    document.getElementById('surikova_readmore'),
    document.getElementById('surikova_readmore_btn'),
    'Leggi tutto', 'Meno'
)
set_readmore(
    document.getElementById('ermolaeva_readmore'),
    document.getElementById('ermolaeva_readmore_btn'),
    'Leggi tutto', 'Meno'
)
function set_readmore (text, btn, more, less) {
  more = more || 'Read more'
  less = less || 'Hide'
  btn.innerHTML = more
  btn.onclick = function () {
    if (text.style.display === 'none') {
      text.style.display = 'inline'
      btn.innerHTML = less
    } else {
      text.style.display = 'none'
      btn.innerHTML = more
    }
  }
}
