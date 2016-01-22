<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title', 'Auth') - Tyloo.fr Backend</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/assets/css/backend.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <strong>Tyloo</strong>.fr</a>
        </div>
        @yield('content')
    </div>

    <script src="/assets/js/backend.js"></script>
</body>
</html>
