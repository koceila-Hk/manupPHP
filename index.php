<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hello, world! </p>
    
    <!-- Je suis en HTML -->

    <?php

    // Je suis en PHP 

    $str = "Ceci est une chaîne de caractères";

    echo $str;


    $user = [
        'prenom' => 'kouss',
        'nom' => 'hk',
        'age' => 27
    ];


    foreach ($user as $cle => $valeur) {
        echo ("$cle : $valeur <br>");
    }




    // echo '<ul>';

    // echo '<li>Prénom : ' . $utilisateur['prenom'] . '</li>';
    // echo '<li>Nom : ' . $utilisateur['nom'] . '</li>';
    // echo '<li>Sexe : ' . $utilisateur['sexe'] . '</li>';
    // echo '<li>Naissance : ' . $utilisateur['naissance'] . '</li>';
    // echo '<li>Mort : ' . $utilisateur['mort'] . '</li>';

    // Remplacé par
    // foreach ($utilisateur as $clef => $valeur) {
    //     echo "<li>$clef : $valeur</li>";
    // }

    // echo '</ul>';

    

 
    ?>

    <!-- Je suis en HTML -->

</body>
</html>