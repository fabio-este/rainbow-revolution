const header = document.querySelector("#page-header");
const contentWrap = document.querySelector("#page-content");
const offcanvas = document.querySelector("#offcanvasNavigaton");
const offcanvasToggle = document.querySelector("#offcanvasNavigatonToggle");
const paddingTop = header.offsetHeight;
window.addEventListener("load", adjustBodyTopPadding);
window.addEventListener("resize", adjustBodyTopPadding);

function adjustBodyTopPadding(e) {
  contentWrap.style.paddingTop = paddingTop + "px";
  offcanvas.style.paddingTop = paddingTop + "px";
}

offcanvasToggle.onclick = function () {
  offcanvasToggle.classList.toggle("active");
};

/**
 * Add transition class
 */
window.addEventListener("DOMContentLoaded", function () {
  var n = document.querySelectorAll(".navbar-fixed-top");
  function t() {
    paddingTop / 2 < window.scrollY
      ? n[0].classList.add("navbar-transition")
      : n[0].classList.remove("navbar-transition");
  }
  1 <= n.length &&
    (["scroll", "resize", "DOMContentLoaded"].forEach(function (n) {
      window.addEventListener(n, t);
    }),
    t());
});
