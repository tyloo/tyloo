<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('app.emails.password.password-reset') }}</title>
</head>
<body>
<p>{{ trans('app.emails.password.password-heading') }}<br>
<br>
{{ trans('app.emails.password.password-content1') }}<br>
{{ trans('app.emails.password.password-content2', ['reset_url' => url('password/reset/'.$token)]) }}
<hr>
<p>{{ trans('app.emails.password.bottom-message') }}</p>
</body>
</html>
