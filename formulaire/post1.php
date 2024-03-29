<?php
$identify = "kouss";
$password = "mot de passe";

if($identify == $_POST["text"] && $password == $_POST["mot"]){
    echo "hello " .$identify;
}
else{
    header("Location: ./index.php");
}


?>