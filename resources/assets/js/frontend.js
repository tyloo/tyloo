$(document).ready(function () {
    /* Scroll Reveal */
    var configLeft = {
        origin   : 'left',
        distance : '100px',
        delay    : 100,
        duration : 1000,
        easing   : 'ease',
        scale    : 1.1
    };
    var configRight = {
        origin   : 'right',
        distance : '100px',
        delay    : 200,
        duration : 1000,
        easing   : 'ease',
        scale    : 1.1
    };
    window.sr = new ScrollReveal();
    sr.reveal('.reveal-left', configLeft);
    sr.reveal('.reveal-right', configRight);
    /* /Scroll Reveal */

    /* Image zoom */
    $('.image-zoom-link').magnificPopup({
        type: 'image',
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });
    /* /Image zoom */

    /* Scroll to top action */
    $('.scroll-top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });
    /* /Scroll to top action */

    /* Run mixitup portfolio */
    $('#myPortfolio').mixItUp({
        targetSelector: '.item',
        transitionSpeed: 600
    });
    $('#portfolio').find('.filter:first-child').addClass('active');
    /* /Run mixitup portfolio */

    /* Zoom links */
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    /* /Zoom links */

    /* Tooltips and popovers */
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
    /* /Tooltips and popovers */

    /* Activate skrollr.js */
    skrollr.init({
        forceHeight: false,
        smoothScrolling: true,
        smoothScrollingDuration: 1500,
        // hack - forces mobile version to be off
        mobileCheck: function () {
            return false;
        }
    });
    /* /Activate skrollr.js */

    /* Owl carousel thumbnail caption slider */
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
    });
    /* /Owl carousel thumbnail caption slider */

    /* Carousel animation fix */
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
    /* /Carousel animation fix */
});
