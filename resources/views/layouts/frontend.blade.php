<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Julien 'Tyloo' Bonvarlet <jbonva@gmail.com>">
    <meta name="description" content="Design - description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <title>Tyloo.fr - Engineer, Web Developer, Google Deployment Specialist and Rugbyman!</title>

    <link rel="stylesheet" href="/assets/css/frontend.css">
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

            {{-- Recent Post --}}
            @include('frontend.partials.common.footer._lastPosts')
            {{-- /Recent Post --}}

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

<a href="#" class="scroll-top"><div class="scrolltop-holder"><i class="fa fa-arrow-up scrolltop"></i></div></a>

<script src="/assets/js/frontend.js"></script>
@include('frontend.partials.common.footer._analytics')
</body>
</html>
