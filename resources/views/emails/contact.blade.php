<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demande de contact</title>
</head>
<body>
<p>Bonjour Dieu,<br>
<br>
Une demande de Contact a été effectuée sur le site <a href="http://www.tyloo.fr">www.tyloo.fr</a> !</p>
<p>Voici les informations :</p>
<ul>
    <li><strong>Nom</strong> : {{ $data['contactName'] }}</li>
    <li><strong>Email</strong> : {{ $data['contactEmail'] }}</li>
    <li><strong>Message</strong> : {!! $data['contactMessage'] !!}</li>
</ul>
<hr>
<p>Cordialement,<br>
R2D2</p>
</body>
</html>
