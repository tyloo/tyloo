<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>AdminLTE Preview - Almsaeed Studio</title>

    <!-- social network metas -->
    <meta property="image" content="http://almsaeedstudio.com/adminlte2.png"/>
    <meta property="og:image" content="http://almsaeedstudio.com/adminlte2.png"/>
    <meta property="site_name" content="Almsaeed Studio"/>
    <meta property="description" content="Preview of AdminLTE control panel and dashboard theme. AdminLTE is based on Bootstrap 3." />
    <meta name="description" content="Preview of AdminLTE control panel and dashboard theme. AdminLTE is based on Bootstrap 3." />

    <link rel="icon" type="image/png" href="http://almsaeedstudio.com/logo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <style>
        html, body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: 'Source Sans Pro', "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        iframe {
            display: block;
            overflow: auto;
            border: 0;
            margin: 0;
            padding: 0;
            margin: 0 auto;
        }
        .frame {
            height: 49px;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid #ddd;
        }
        .frame a {
            color: #666;
        }
        .frame a:hover {
            color: #222;
        }
        .frame .buttons a {
            height: 49px;
            line-height: 49px;
            display: inline-block;
            text-align: center;
            width: 50px;
            border-left: 1px solid #ddd;
        }
        .frame .brand {
            color: #444;
            font-size: 20px;
            line-height: 49px;
            display: inline-block;
            padding-left: 10px;
        }
        .frame .brand small {
            font-size: 14px;
        }
        a,a:hover {
            text-decoration: none;
        }
        .container-fluid {
            padding: 0;
            margin: 0;
        }
        .text-muted {
            color: #999;
        }
        .ad {
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            background: #222;
            background: rgba(0,0,0,0.8);
            width: 100%;
            color: #fff;
            display: none;
        }
        #close-ad {
            float: left;
            margin-left: 10px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-46680343-1', 'almsaeedstudio.com');
        ga('send', 'pageview');

    </script>
</head>
<body>
<header>
    <nav class="frame" role="navigation">
        <div class="container-fluid">
            <a href="https://almsaeedstudio.com" class="brand">
                Almsaeed Studio
                <small class="text-muted hidden-xs">AdminLTE preview</small>
            </a>
            <div class="buttons pull-right">
                <a class="first hidden-xs" id="display-full" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Desktop - full width"><i class="fa fa-desktop fa-lg"></i></a>
                <a class="hidden-xs" id="display-940" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Tablet - 940px"><i class="fa fa-tablet fa-lg"></i></a>
                <a class="hidden-xs" id="display-480" href="#" data-toggle="tooltip" data-placement="bottom" title="Display Phone - 480px"><i class="fa fa-mobile fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/premium" data-toggle="tooltip" data-placement="bottom" title="Premium Templates"><i  style="color: #F34D59" class="fa fa-tint fa-lg"></i></a>
                <a href="https://almsaeedstudio.com/download/AdminLTE-master" data-toggle="tooltip" data-placement="bottom" title="Download now"><i class="fa fa-download fa-lg"></i></a>
                <a id="remove-frame" href="#" data-toggle="tooltip" data-placement="bottom" title="Remove frame"><i class="fa fa-times"></i></a>
            </div>
        </div><!-- /.container -->
    </nav><!--/.navbar-->
</header>
<iframe src="//almsaeedstudio.com/themes/AdminLTE/index2.html" id="preview-iframe"></iframe>

<div class="ad">
    <span id="close-ad"><i class="fa fa-times"></i> Close Ad</span>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 visible-xs">
                <!-- AdminLTE -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:300px;height:250px"
                     data-ad-client="ca-pub-4495360934352473"
                     data-ad-slot="5866534244"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="col-xs-12 hidden-xs">
                <!-- Home large leaderboard -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-4495360934352473"
                     data-ad-slot="1170479443"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.ad -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
    $(function() {
        function _fix() {
            var h = $(window).height();
            var w = $(window).width();
            $("#preview-iframe").css({
                width: w + "px",
                height: (h - 50) + "px"
            });
        }
        _fix();
        $(window).resize(function() {
            _fix();
        });
        $('[data-toggle="tooltip"]').tooltip();

        function iframe_width(width) {
            $("#preview-iframe").animate({width: width}, 500);
        }

        $("#display-full").click(function(e){
            e.preventDefault();
            iframe_width("100%");
        });

        $("#display-940").click(function(e){
            e.preventDefault();
            iframe_width("940px");
        });

        $("#display-480").click(function(e){
            e.preventDefault();
            iframe_width("480px");
        });

        $("#remove-frame").click(function(e){
            e.preventDefault();
            window.location.href = "http://almsaeedstudio.com/themes/AdminLTE/index2.html";
        });

        $(".ad").hide().delay(3000).show(500);

        $("#close-ad").click(function(e){
            e.preventDefault();
            $(".ad").remove();
        });

    });

</script>
</body>
</html>