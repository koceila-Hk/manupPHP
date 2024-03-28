<?php
$identify=1;
$password="mot de passe";

if($identify==$_POST["nombre"] && $password==$_POST["mot"]){
    echo "hello";
}
else{
    header("Location: ./index.php");
}



?>