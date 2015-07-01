<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
<p>Bonjour Monsieur,<br>
<br>
Vous avez demandé de réinitialiser votre mot de passe et dans toute ma bonté, votre souhait est exhaussé !<br>
Voici le lien pour changer votre mot de passe : {{ url('password/reset/'.$token) }}
<hr>
<p>Cordialement,<br>
R2D2</p>
</body>
</html>
