!function (e) { "use strict"; function o(o) { o.each(function () { var o = e(this), a = o.data("delay"), n = "animated " + o.data("animation"); o.css({ "animation-delay": a, "-webkit-animation-delay": a }), o.addClass(n).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () { o.removeClass(n) }) }) } e(document).ready(function () { var a, n, i, s; !function () { var o = e(".panel-btn"), a = e(".panel-close"), n = e(".offcanvas-panel"), i = e(".panel-overly"), s = e(".offcanvas-menu"); o.on("click", function (e) { e.preventDefault(), n.addClass("panel-open") }), a.on("click", function (e) { e.preventDefault(), n.removeClass("panel-open") }), i.on("click", function (e) { e.preventDefault(), n.removeClass("panel-open") }), s.find("li a").each(function () { e(this).next().length > 0 && e(this).parent("li").append('<span class="dd-trigger"><i class="fal fa-angle-down"></i></span>') }), s.find("li .dd-trigger").on("click", function (o) { o.preventDefault(), e(this).toggleClass("open").parent("li").children("ul").stop(!0, !0).slideToggle(350) }); var t = e(".search-btn"), l = e(".search-form"), r = e(".search-close"), d = e(".search-overly"); t.on("click", function (e) { e.preventDefault(), l.addClass("search-open") }), r.on("click", function (e) { e.preventDefault(), l.removeClass("search-open") }), d.on("click", function (e) { e.preventDefault(), l.removeClass("search-open") }) }(), e(".instagram-images").slick({ infinite: !0, slidesToShow: 7, slidesToScroll: 1, autoplay: !1, autoplaySpeed: 5e3, speed: 500, arrows: !1, fade: !1, dots: !1, swipe: !0, responsive: [{ breakpoint: 1200, settings: { slidesToShow: 6 } }, { breakpoint: 992, settings: { slidesToShow: 5 } }, { breakpoint: 768, settings: { slidesToShow: 4 } }, { breakpoint: 576, settings: { slidesToShow: 2 } }] }), a = e(".banner-slider"), n = e(".sinlge-banner:first-child"), a.on("init", function (e, a) { o(n.find("[data-animation]")) }), a.on("beforeChange", function (a, n, i, s) { o(e('div.slick-slide[data-slick-index="' + s + '"]').find("[data-animation]")) }), a.slick({ infinite: !0, slidesToShow: 1, slidesToScroll: 1, autoplay: !1, autoplaySpeed: 5e3, speed: 500, arrows: !0, fade: !0, dots: !1, swipe: !0, nextArrow: '<button class="slick-arrow next-arrow"><i class="far fa-angle-right"></i></button>', prevArrow: '<button class="slick-arrow prev-arrow"><i class="far fa-angle-left"></i></button>', appendArrows: e(".banner-nav") }), e("#photoStoriesLoaded").imagesLoaded(function () { var o = e(".photo-stories").isotope({ itemSelector: ".photo-item", masonry: { columnWidth: ".photo-item" } }); e(".photo-stories-nav").on("click", "li", function () { var a = e(this).attr("data-filter"); o.isotope({ filter: a }) }), e(".photo-stories-nav li").on("click", function (o) { e(this).siblings(".active").removeClass("active"), e(this).addClass("active"), o.preventDefault() }), e(".photo-view").magnificPopup({}), e(".photo-stories").magnificPopup({ delegate: "a", type: "image", closeOnContentClick: !1, closeBtnInside: !1, gallery: { enabled: !0 } }) }), i = e(".main-images-slider"), s = e(".dots-images-slider"), i.slick({ infinite: !0, slidesToShow: 1, slidesToScroll: 1, autoplay: !0, autoplaySpeed: 5e3, speed: 500, arrows: !1, fade: !1, dots: !1, swipe: !0, asNavFor: s }), s.slick({ infinite: !0, slidesToShow: 3, slidesToScroll: 1, autoplay: !0, autoplaySpeed: 5e3, speed: 500, arrows: !1, fade: !1, dots: !1, swipe: !0, asNavFor: i, focusOnSelect: !0 }), e("select").niceSelect() }), e(window).on("scroll", function () { var o; o = e("header.sticky-header"), e(window).scrollTop() < e("header").height() + 10 ? o.removeClass("sticky-on") : o.addClass("sticky-on") }), e(window).on("load", function () { e("#postWarpperLoaded").imagesLoaded(function () { e(".masonary-posts").isotope() }), e("#postWarpperLoaded").imagesLoaded(function () { e(".sidebar-masonary").isotope() }) }) }(jQuery);
// Splide Slider JS
document.addEventListener("DOMContentLoaded", function () {
    new Splide("#instagramSlider", {
        type: "loop",
        perPage: 4,
        autoplay: true,
        focus: "center",
    }).mount();
});

const fileInput = document.getElementById('file-input');
const imagePreview = document.getElementById('image-preview');

fileInput.addEventListener('change', function (event) {
    const selectedFiles = event.target.files;
    imagePreview.innerHTML = '';

    for (const file of selectedFiles) {
        if (file.type.match('image.*')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.alt = 'Image Preview';
                img.style.display = 'block';
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    }
});