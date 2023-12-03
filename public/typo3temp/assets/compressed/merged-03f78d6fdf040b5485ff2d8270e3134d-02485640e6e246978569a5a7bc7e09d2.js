
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

const rainbowColors = [
  "hsl(1deg, 100%, 55%)", // red
  "hsl(25deg, 100%, 50%)", // orange
  "hsl(40deg, 100%, 50%)", // yellow
  "hsl(130deg, 100%, 40%)", // green
  "hsl(230deg, 100%, 45%)", // blue
  "hsl(240deg, 100%, 45%)", // indigo
  "hsl(260deg, 100%, 55%)", // violet
];
const paletteSize = rainbowColors.length;
// Number of milliseconds for each update
const intervalDelay = 1000;
const colorNames = [
  "--magic-rainbow-color-0",
  "--magic-rainbow-color-1",
  "--magic-rainbow-color-2",
];
// Register properties
colorNames.forEach((name, index) => {
  CSS.registerProperty({
    name,
    syntax: "<color>",
    inherits: false,
    initialValue: rainbowColors[index],
  });
});
const buttomElem = document.querySelectoAll(
  ".frame-background-rainbow-animated"
);
let cycleIndex = 0;
window.setInterval(() => {
  // Shift every color up by one position.
  //
  // `% paletteSize` is a handy trick to ensure
  // that values "wrap around"; if we've exceeded
  // the number of items in the array, it loops
  // back to 0.
  const nextColors = [
    rainbowColors[(cycleIndex + 1) % paletteSize],
    rainbowColors[(cycleIndex + 2) % paletteSize],
    rainbowColors[(cycleIndex + 3) % paletteSize],
  ];
  // Apply these new colors, update the DOM.
  colorNames.forEach((name, index) => {
    buttonElem.style.setProperty(name, nextColors[index]);
  });
  // increment the cycle count, so that we advance
  // the colors in the next loop.
  cycleIndex++;
}, intervalDelay);
