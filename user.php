<?php


$user = [
    'prenom' => 'kouss',
    'nom' => 'hk',
    'age' => 27
];


foreach ($user as $cle => $valeur) {
    echo ("$cle : $valeur <br>");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
        Bonjour, je m'appelle <?= $user['prenom'] . ' ' . mb_strtoupper($user['nom']) ?>. <br>
        J'ai <?= $user['age'] ?> ans et je suis <?= $user['profession'] ?>.
    </p>
</body>
</html>