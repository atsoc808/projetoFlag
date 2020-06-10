<?php

require("base.php");

class Drivers extends Base{

    public function getDrivers(){
        $query=$this->db->prepare("
        SELECT DISTINCT CONCAT(d.forename,' ' ,d.surname) AS driver, driverId
        FROM drivers d
        INNER JOIN driverstandings dstand USING (driverId)
        INNER JOIN races USING (raceId)
        WHERE races.year = ?
    ");
    
    if(isset($_GET["season"])){
        $season=(int)$_GET["season"];
      }

    if(isset($season)){
        $query->execute(array($season)); 
    } 
    
    $driver = $query ->fetchAll(PDO::FETCH_ASSOC);  

    return $driver;
    }

    public function getSeason(){

        $query = $this->db->prepare("
        SELECT year
        FROM seasons
        ORDER BY year DESC
      ");
    
       $query->execute();
    
       $dropdownYear = $query ->fetchAll(PDO::FETCH_ASSOC);
        
       return $dropdownYear;
    }
     
}

?>