// Splide Slider JS
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#featuredPostSlider", {
    type: "loop",
    perPage: 4,
    autoplay: true,
    focus: "center",
  }).mount();
});

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#recommendedPostSlider", {
    type: "loop",
    perPage: 2,
    focus: "center",
    autoplay: true,
  }).mount();
});

function load() {
  window.open('./loadmorePage.php', '_blank');
}