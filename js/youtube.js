function createIframe(videoId) { 
  const iframe = document.createElement("iframe")
  const src = "https://www.youtube.com/embed/" + videoId + "?autoplay=1&rel=0&controls=0&showinfo=0&origin=https://www.porticodelleparole.it/"
  iframe.setAttribute("src", src)
  iframe.setAttribute("frameborder", 0)
  iframe.setAttribute("allow", "autoplay")
  iframe.style.position = "absolute"
  iframe.style.width = "100%"
  iframe.style.height = "100%"
  return iframe
}

function setBackgroundImage(element, videoId) {
  const url = "https://img.youtube.com/vi/" + videoId + "/sddefault.jpg"
  element.style["background-image"] = "url(" + url + ")"
}

function initPlayer(element) {
  const videoId = element.dataset.id
  setBackgroundImage(element, videoId)

  element.onclick = function () {
    const iframe = createIframe(videoId)
    this.parentNode.replaceChild(iframe, this)
  }
}

function initPlayers() {
  const elements = document.getElementsByClassName("youtube-placeholder")
  Array.from(elements).forEach(initPlayer)
}

document.addEventListener('DOMContentLoaded', initPlayers)
