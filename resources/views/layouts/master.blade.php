<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta_title', 'Tyloo')</title>
    <meta name="description" content="@yield('meta_description', 'Tyloo description')">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<section class="hero is-dark is-medium is-bold">
    <div class="hero-head">
        <div class="container">
            <nav class="nav">
                <div class="nav-left">
                    <a class="nav-item nav-logo" href="/">Tyloo</a>
                </div>

                <span id="nav-toggle" class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

                <div id="nav-menu" class="nav-right nav-menu">
                    <a class="nav-item is-tab{{ active_state('/') }}" href="{{ route('pages.home') }}">Home</a>
                    <a class="nav-item is-tab{{ active_state('resume') }}" href="{{ route('pages.resume') }}">Résumé</a>
                    <a class="nav-item is-tab{{ active_state('projects') }}" href="{{ route('pages.projects.index') }}">Projects</a>
                    <a class="nav-item is-tab{{ active_state('blog') }}" href="{{ route('pages.blog.index') }}">Blog</a>
                    <a class="nav-item is-tab{{ active_state('contact') }}" href="{{ route('pages.contact') }}">Contact</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column has-text-centered">
                    <figure class="image is-128x128 is-128x128-rounded is-centered">
                        <img src="/img/julien.jpg">
                    </figure>

                    <div class="content is-large">
                        <h1 class="title">
                            Julien '<strong>Tyloo'</strong> Bonvarlet
                        </h1>
                        <h2 class="subtitle">
                            Web engineer from Paris (France) - Specialized in PHP and the Laravel Framework
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h1 class="title">Page title</h1>
        <h2 class="subtitle">Page subtitle</h2>

        <hr>

        <p>
            @yield('content')
        </p>
    </div>
</section>


<section class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <div class="column has-text-centered">
                <p class="title">Bulma <strong>Newsletter</strong></p>
                <p class="subtitle">Get notified when v1 is ready!</p>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                &copy; Julien '<strong>Tyloo</strong>' Bonvarlet 1988 - 2016 (and still counting...).
            </p>
            <p>
                Website crafted in <strong><a href="https://laravel.com">Laravel</a></strong> with <i class="fa fa-heart"></i> and some Black Magic (and some coffee...)
            </p>
            <p>
                The source code is licensed <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content is licensed <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>.
            </p>
        </div>
    </div>
</footer>

<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
