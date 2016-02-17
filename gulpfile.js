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
    // Fonts Awesome
    mix.copy('./node_modules/font-awesome/fonts', 'public/assets/fonts')
    // Fonts Summernote
    .copy('./node_modules/summernote/dist/font', 'public/assets/css/font')
    // Frontend
    .styles([
        "./node_modules/font-awesome/css/font-awesome.min.css",
        "./node_modules/bootstrap/dist/css/bootstrap.min.css",
        "./node_modules/bootstrap-social/bootstrap-social.css",
        "./node_modules/animate.css/animate.min.css",
        "./node_modules/owl-carousel-2/assets/owl.carousel.min.css",
        "./node_modules/magnific-popup/dist/magnific-popup.css",
        "frontend.css",
        "tyloo.fr.css"
    ], 'public/assets/css/frontend.css')
    .scripts([
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/bootstrap/dist/js/bootstrap.min.js",
        "./node_modules/jquery-easing/jquery.easing.1.3.js",
        "./node_modules/magnific-popup/dist/jquery.magnific-popup.min.js",
        "./vendor/patrickkunka/mixitup/build/jquery.mixitup.min.js",
        "./node_modules/owl-carousel-2/owl.carousel.min.js",
        "./node_modules/scrollreveal/dist/scrollreveal.min.js",
        "./node_modules/skrollr/dist/skrollr.min.js",
        "frontend.js"
    ], 'public/assets/js/frontend.js')
    // Backend
    .styles([
        "./node_modules/font-awesome/css/font-awesome.min.css",
        "./node_modules/bootstrap/dist/css/bootstrap.min.css",
        "./node_modules/admin-lte/dist/css/AdminLTE.min.css",
        "./node_modules/admin-lte/dist/css/skins/skin-blue.min.css",
        "./node_modules/summernote/dist/summernote.css",
        "./node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
        "./node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput-typeahead.css",
        "backend.css",
    ], 'public/assets/css/backend.css')
    .scripts([
        "./node_modules/jquery/dist/jquery.min.js",
        "./node_modules/bootstrap/dist/js/bootstrap.min.js",
        "./node_modules/admin-lte/dist/js/app.min.js",
        "./node_modules/typeahead.js/dist/typeahead.bundle.min.js",
        "./node_modules/summernote/dist/summernote.min.js",
        "./node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js",
        "backend.js",
    ], 'public/assets/js/backend.js');
});
