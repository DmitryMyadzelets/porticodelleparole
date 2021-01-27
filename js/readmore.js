function setReadmore (text, btn, more, less) {
  if (!text || !btn) { return } 
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

[
  'olga',
  'yana',
  'ermolaeva',
  'stepina'
].forEach(function (name) {
  const text = document.getElementById(name + '_readmore')
  const btn = document.getElementById(name + '_readmore_btn')
  setReadmore(text, btn, 'Leggi tutto', 'Meno')
})


