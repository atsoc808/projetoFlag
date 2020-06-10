<?php

require("models/driverProfile.php");

require("controllers/userAcess.php");


$driverProfile = new DriverProfile();

if(empty($url_parts[2])){
    header("HTTP/1.1 400 Bad Request");
    die("Request Inválido");
}

if(is_numeric($url_parts[2])){

    $driverInfo = $driverProfile->getDriverInfo($url_parts[2]);

    if(empty($driverInfo)){
        header("HTTP/1.1 404 Not Found");
        die("Error 404:Tópico inexistente");    }
}

require("views/driverProfile.php");

?>
 