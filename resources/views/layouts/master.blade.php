<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Tyloo')</title>
    <meta name="description" content="@yield('meta_description')">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<section class="hero is-info is-bold">
    <div class="hero-head">
        <div class="container">
            <nav class="nav">
                <div class="nav-left">
                    <a class="nav-item" href="/"><img src="/img/logo.png" alt="Logo"></a>
                </div>

                <span id="nav-toggle" class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>

                <div id="nav-menu" class="nav-right nav-menu">
                    <a class="nav-item is-active" href="#">Home</a>
                    <a class="nav-item is-active" href="#">Résumé</a>
                    <a class="nav-item is-active" href="#">Projects</a>
                    <a class="nav-item is-active" href="#">Blog</a>
                    <a class="nav-item is-active" href="#">Contact</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <p class="title">
                        Title
                    </p>
                    <p class="subtitle">
                        Slogan
                    </p>
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
            Page content
        </p>
    </div>
</section>


<section id="newsletter" class="hero is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup" class="columns is-vcentered">
                <div class="column is-one-third is-left">
                    <p class="title">Bulma <strong>Newsletter</strong></p>
                    <p class="subtitle">Get notified when v1 is ready!</p>
                </div>

                <div class="column">
                    <form action="https://bbxdesign.us3.list-manage.com/subscribe/post?u=b43b93fe633f0560b2a72a69c&amp;id=52585e8803"
                          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                          class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <div class="control is-grouped">
                                <div class="control has-icon is-expanded">
                                    <input type="email" value="" name="EMAIL" class="input is-flat required email"
                                           id="mce-EMAIL" placeholder="email address" required>
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="control">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"
                                           class="button is-white is-outlined">
                                </div>
                            </div>
                            <div id="mce-responses">
                                <div class="notification is-danger response" id="mce-error-response"
                                     style="display:none"></div>
                                <div class="notification is-success response" id="mce-success-response"
                                     style="display:none"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_b43b93fe633f0560b2a72a69c_52585e8803" tabindex="-1" value="">
                            </div>
                        </div>
                    </form>
                </div>
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
