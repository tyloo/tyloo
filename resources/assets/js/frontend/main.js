// Scroll Reveal
var config = {
    easing: 'hustle',
    mobile: true,
    delay: 'onload'
}
window.sr = new scrollReveal(config);

// image zoom
$(document).ready(function () {
    $('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
});

// Scroll to top action
$('.scroll-top').on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
});

// Run mixitup portfolio
$(function () {
    $('#myPortfolio').mixitup({
        targetSelector: '.item',
        transitionSpeed: 600
    });
});

// Zoom links
$(document).ready(function () {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

// Tooltips and popovers
$(function () {
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
});

// Activate skrollr.js
skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
    smoothScrollingDuration: 1500,
    // hack - forces mobile version to be off
    mobileCheck: function () {
        return false;
    }
});

// Owl carousel thumbnail caption slider
$('#owl-carousel-thumb').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navContainer: '#customNav',
    navText: ["<span><</span>", "<span>></span>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
})

// Carousel animation fix
function animateElement(obj, anim_) {
    obj.addClass(anim_ + ' animated').one(
        'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function () {
            $(this).removeClass();
        });
}
$('#carouselHome').on('slide.bs.carousel', function (e) {
    var current = $('.item').eq(parseInt($(e.relatedTarget).index()));
    $('[data-animation]').removeClass();
    $('[data-animation]', current).each(function () {
        var $this = $(this);
        var anim_ = $this.data('animation');
        animateElement($this, anim_);
    });
});
