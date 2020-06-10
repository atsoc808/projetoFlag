<?php

require("base.php");

class DriverProfile extends Base{

    public function getDriverInfo($id){

        $query=$this->db->prepare(
            "
            SELECT DISTINCT CONCAT(d.forename,' ' ,d.surname) AS driver, driverId, number, dob, nationality, DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(dob, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(dob, '00-%m-%d')) AS age
            FROM drivers d
            WHERE driverId = ? 
            "
        );

        $query->execute(array($id));
        
        $driverInfo = $query->fetchAll(PDO::FETCH_ASSOC);

        return $driverInfo;

    }
 
}

?>