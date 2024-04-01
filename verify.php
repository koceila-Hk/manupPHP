<?php
if ($nombre = $_POST["nombre"]) {
    pairImpair($nombre);
}

function pairImpair($nb) {
    if ($nb % 2 == 0) {
        echo $nb . " est un nombre pair";
    } else {
        echo $nb . " est un nombre impair";
    }
}
?>