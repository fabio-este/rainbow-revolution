
const header = document.querySelector("#page-header");
const contentWrap = document.querySelector("#page-content");

console.log(header);
console.log(contentWrap);
window.addEventListener("load", adjustBodyTopPadding);
window.addEventListener("resize", adjustBodyTopPadding);

function adjustBodyTopPadding(e) {
  let paddingTop = header.offsetHeight;
  console.log(paddingTop);
  contentWrap.style.paddingTop = paddingTop + "px";
}

const loadingScreen = document.querySelector("#loading-screen");

window.addEventListener("pageshow", (event) => {
  loadingScreen.classList.remove("fade-in");
  loadingScreen.classList.add("fade-out");
});

window.addEventListener("beforeunload", (event) => {
  loadingScreen.classList.remove("fade-out");
  loadingScreen.classList.add("fade-in");
});
