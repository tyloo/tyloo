<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Julien 'Tyloo' Bonvarlet <jbonva@gmail.com>">
    <meta name="description" content="Design - description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/img/favicon.ico') }}">
    <title>Tyloo.fr - Engineer, Web Developer, Google Deployment Specialist and Rugbyman!</title>

    {{-- Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.snippet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>
<body>

{{-- Header --}}
<header>
    {{-- Navigation --}}
    <div class="navbar navbar-fixed-top">
        <div class="container container-header">
            <div class="navbar-header">
                {{-- Logo --}}
                @include('frontend.partials.common.header._logo')
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
            @include('frontend.partials.common.header._menu')
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
            @include('frontend.partials.common.footer._about')
            {{-- /About --}}

            {{-- Recent Work --}}
            @include('frontend.partials.common.footer._lastPosts')
            {{-- /Recent Work --}}

            {{-- Contact --}}
            @include('frontend.partials.common.footer._contact')
            {{-- /Contact --}}

            {{-- Social --}}
            @include('frontend.partials.common.footer._social')
            {{-- /Social --}}
        </div>

        {{-- Copyright --}}
        @include('frontend.partials.common.footer._copyright')
        {{-- /Copyright --}}
    </div>
</footer>
{{-- /Footer --}}

<a href="#" class="scroll-top"><div class="scrolltop-holder"><span class="ion-ios7-arrow-up scrolltop"></span></div></a>

<script src="{{ asset('assets/frontend/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/hover-dropdown.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/scrollReveal.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.snippet.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('assets/frontend/js/activate-snippet.js') }}"></script>
<script src="{{ asset('assets/frontend/js/skrollr.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>
</html>
