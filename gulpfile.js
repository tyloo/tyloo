var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        "common/font-awesome.min.css",
        "common/bootstrap.min.css",
        "frontend/bootstrap-social.css",
        "frontend/animate.min.css",
        "frontend/owl.carousel.css",
        "frontend/magnific-popup.css",
        "frontend/style.css"
    ], 'public/assets/css/frontend.css');

    mix.scripts([
        "common/jquery-2.1.4.min.js",
        "common/bootstrap.min.js",
        "frontend/jquery.easing.min.js",
        "frontend/jquery.magnific-popup.min.js",
        "frontend/jquery.mixitup.min.js",
        "frontend/owl.carousel.min.js",
        "frontend/scrollReveal.js",
        "frontend/skrollr.min.js",
        "frontend/main.js"
    ], 'public/assets/js/frontend.js');

    mix.styles([
        "common/font-awesome.min.css",
        "common/bootstrap.min.css",
        "backend/AdminLTE.min.css",
        "backend/skin-blue.min.css",
        "backend/summernote.css"
    ], 'public/assets/css/backend.css');

    mix.scripts([
        "common/jquery-2.1.4.min.js",
        "common/bootstrap.min.js",
        "backend/summernote.min.js",
        "backend/app.min.js",
    ], 'public/assets/js/backend.js');
});
