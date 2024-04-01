<?php

echo 'Hello World!' . "<br>";

function add($a, $b) {
    $sum = $a + $b;
    $soust = $a -$b;
    $mult = $a * $b;
    if ($b != 0) {
        $div = $a / $b;
    } else {
        'erreur lors de la division sur zéro';
    }
    echo $sum . "<br>";
    echo $soust . "<br>";
    echo $mult . "<br>";
    echo $div . "<br>";
}
add(10, 5);


// function nombre pair/impair

function pairImpair($nb) {
    if ($nb % 2 == 0) {
        echo $nb . "nombre pair";
    } else {
        echo $nb . "nombre impair";
    }
}

// boucle for
$nb = 10;
for($i = 0; $i <= $nb; $i++) {
    echo $i . "<br>";
}

// table de multiplication

function tableMulti($nb) {
    for ($i = 0; $i <= 10; $i++) {
        echo "$nb " . "* " . " $i" . " = " . $nb * $i . "<br>";
    }
}
tableMulti(5);
?>