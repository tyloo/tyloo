<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ trans('app.emails.contact.contact-message') }}</title>
</head>
<body>
<p>
    {{ trans('app.emails.contact.contact-message') }}<br>
    <br>
    {!! trans('app.emails.contact.contact-info-text', ['website_url' => route('home')]) !!}
</p>
<p>{{ trans('app.emails.contact.here-are-the-infos') }}</p>
<ul>
    <li><strong>{{ trans('app.name') }}</strong> : {{ $data['contactName'] }}</li>
    <li><strong>{{ trans('app.email') }}</strong> : {{ $data['contactEmail'] }}</li>
    <li><strong>{{ trans('app.message') }}</strong> : {!! $data['contactMessage'] !!}</li>
</ul>
<hr>
<p>{{ trans('app.emails.contact.bottom-message') }}</p>
</body>
</html>
