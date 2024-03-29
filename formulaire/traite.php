<?php
// for($i = 0; $i < $_GET["nombre"]; $i++){
   
//     echo $_GET["message"];
//     echo "<br>";
// }


if (
    empty($_GET['message'])
    || empty($_GET['n'])
    || !is_numeric($_GET['n'])
    || !is_string($_GET['n'])
    || $_GET['n'] < 0
) {
    die('Nope');
}

echo str_repeat($_GET['message'] . '<br>', $_GET['n']);
?>