jQuery(document).ready(function ($) {
    var $toggle = $('#nav-toggle');
    var $menu = $('#nav-menu');

    $toggle.click(function () {
        $(this).toggleClass('is-active');
        $menu.toggleClass('is-active');
    });
});
