<?php

require("models/comparisons.php");

require("controllers/userAcess.php");


$compare = new Compare();

//GET DRIVER LEFT
$driverLeft = $compare->getDriverLeft();

//GET DRIVER RIGHT
$driverRight = $compare->getDriverRight();

// AVG START LEFT
$avgGridStartLeft = $compare->getAvgStartLeft();

//AVG START RIGHT
$avgGridStartRight =$compare->getAvgStartRight();

//AVGFINISHLEFT
$avgFinishLeft =$compare->getAvgFinishLeft();

//AVGFINISHRIGHT
$avgFinishRight =$compare->getAvgFinishRight();

//POLE POSITIONS LEFT
$polePositionsLeft = $compare->getPolePositionsLeft();

//POLE POSITIONS RIGHT
$polePositionsRight = $compare->getPolePositionsRight();

//PODIUMS LEFT
$podiumsLeft = $compare->getPodiumsLeft();

//PODIUMS RIGHT
$podiumsRight = $compare->getPodiumsLeft();

//DNFS LEFT
$dnfLeft= $compare ->getDnfLeft();

//DNFS RIGHT
$dnfRight= $compare ->getDnfRight();

$dataLeft = array($avgGridStartLeft,$avgFinishLeft,$polePositionsLeft,$podiumsLeft,$dnfLeft);

require("views/compare.php");

?>