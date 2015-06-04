// Top bar animation
$( window ).scroll(function() {
    if (document.body.scrollTop == 0) {
        $('.scroll-top').fadeOut('slow');
    }
    else {
        $('.scroll-top').fadeIn('slow');
    }
});

// Scroll Reveal
var config = {
    easing: 'hustle',
    mobile: true,
    delay: 'onload'
}
window.sr = new scrollReveal(config);

// image zoom
$(document).ready(function() {
    $('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
});

// Responsive video
$(document).ready(function() {
    $(document.body).fitVids();
});

// Scroll to top action
$('.scroll-top').on('click', function(event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
});

// Run mixitup portfolio
$(function() {
    $('#myPortfolio').mixitup({
        targetSelector: '.item',
        transitionSpeed: 600
    });
});

// Zoom links
$(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

$(function() {
    $(".dropdown-menu > li > a.trigger").on("click", function(e) {
        var current = $(this).next();
        current.toggle();
        e.stopPropagation();
    });
});

// Side-navbar
$("li.list-toggle").bind("click", function() {
    $(this).toggleClass("active");
});

// Tooltips and popovers
$(function() {
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
});

// Activate skrollr.js
skrollr.init({
    forceHeight: false,
    smoothScrolling: true,
    smoothScrollingDuration: 1500,
    // hack - forces mobile version to be off
    mobileCheck: function() {
        return false;
    }
});

// Carousel subnav slider
$(document).ready(function() {
    var clickEvent = false;
    $('#carouselSubnav').on('click', '.nav a', function() {
        clickEvent = true;
        $('#carouselSubnav .nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
        if (!clickEvent) {
            var count = $('#carouselSubnav .nav').children().length - 1;
            var current = $('#carouselSubnav .nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                $('#carouselSubnav .nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
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
        function() {
            $(this).removeClass();
        });
}
$('#carouselHome, #carouselSubnav').on('slide.bs.carousel', function(e) {
    var current = $('.item').eq(parseInt($(e.relatedTarget).index()));
    $('[data-animation]').removeClass();
    $('[data-animation]', current).each(function() {
        var $this = $(this);
        var anim_ = $this.data('animation');
        animateElement($this, anim_);
    });
});