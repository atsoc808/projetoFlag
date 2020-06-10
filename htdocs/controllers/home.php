<?php
require("models/drivers.php");

require("controllers/userAcess.php");

$driverModel = new Drivers();

$dropdownYear = $driverModel ->getSeason();

$driver =$driverModel->getDrivers();

require("views/home.php");

?>