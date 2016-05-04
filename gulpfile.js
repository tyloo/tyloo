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
    .sass('frontend.sass', 'public/assets/css')
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
    .sass('backend.sass', 'public/assets/css')
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
