<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Julien 'Tyloo' Bonvarlet <jbonva@gmail.com>">
    <meta name="description" content="Design - description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <title>Design</title>

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-social.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery.snippet.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/buttons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

{{-- Header --}}
<header>
    {{-- Navigation --}}
    <div class="navbar navbar-fixed-top">
        <div class="container container-header">
            <div class="navbar-header">
                {{-- Logo --}}
                @include('partials.common.header._logo')
                {{-- /Logo --}}

                {{-- Mobile Navigation --}}
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{-- /Mobile Navigation --}}
            </div>

            {{-- Main Navigation --}}
            @include('partials.common.header._menu')
            {{-- /Main Navigation --}}
        </div>
    </div>
    {{-- /Navigation --}}
</header>
{{-- /Header --}}

{{-- Main Container --}}
<div class="main-container">
    @yield('content')
</div>
{{-- /Main Container --}}

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="row">
            {{-- About --}}
            @include('partials.common.footer._about')
            {{-- /About --}}

            {{-- Recent Work --}}
            @include('partials.common.footer._lastPosts')
            {{-- /Recent Work --}}

            {{-- Contact --}}
            @include('partials.common.footer._contact')
            {{-- /Contact --}}

            {{-- Social --}}
            @include('partials.common.footer._social')
            {{-- /Social --}}
        </div>

        {{-- Copyright --}}
        @include('partials.common.footer._copyright')
        {{-- /Copyright --}}
    </div>
</footer>
{{-- /Footer --}}

<a href="#" class="scroll-top"><div class="scrolltop-holder"><span class="ion-ios7-arrow-up scrolltop"></span></div></a>

<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/hover-dropdown.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.mixitup.min.js"></script>
<script src="assets/js/scrollReveal.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.snippet.min.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/activate-snippet.js"></script>
<script src="assets/js/skrollr.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
