const header = document.querySelector("#page-header");
const contentWrap = document.querySelector("#page-content");
const offcanvas = document.querySelector("#offcanvasNavigaton");
const offcanvasToggle = document.querySelector("#offcanvasNavigatonToggle");

window.addEventListener("load", adjustBodyTopPadding);
window.addEventListener("resize", adjustBodyTopPadding);

function adjustBodyTopPadding(e) {
  let paddingTop = header.offsetHeight;
  contentWrap.style.paddingTop = paddingTop + "px";
  offcanvas.style.paddingTop = paddingTop + "px";
}

offcanvasToggle.onclick = function () {
  offcanvasToggle.classList.toggle("active");
};
