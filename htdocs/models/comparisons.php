<?php

require("base.php");

    class Compare extends Base {

        public function getDriverLeft(){
            
            //GET LEFT DRIVER
            $query=$this->db->prepare(
                "SELECT DISTINCT CONCAT(d.forename,' ' ,d.surname) AS driver, driverId
                FROM drivers d
                WHERE driverId = ? "
            );

            $query->execute([$_POST["idLeft"]]);

            $driverLeft =$query->fetchAll(PDO::FETCH_ASSOC);

            return $driverLeft;
        }

        public function getDriverRight(){
            
            //GET RIGHT DRIVER
            $query=$this->db->prepare(
                "SELECT DISTINCT CONCAT(d.forename,' ' ,d.surname) AS driver, driverId
                FROM drivers d
                WHERE driverId = ? "
            );

            $query->execute([$_POST["idRight"]]);

            $driverRight =$query->fetchAll(PDO::FETCH_ASSOC);

            return $driverRight;
        }


        public function getAvgStartLeft(){

            // AVG START LEFT
            $query=$this->db->prepare(
                "SELECT floor(AVG (r.grid)) as avgStart
                FROM results r
                INNER JOIN drivers d USING (driverId)
                WHERE d.driverId = ?
                "
            );

            $query->execute([$_POST["idLeft"]]); 

            $avgStartLeft = $query -> fetchAll(PDO::FETCH_ASSOC);

            return $avgStartLeft;
        }

        public function getAvgStartRight(){

            // AVG START LEFT
            $query=$this->db->prepare(
                "SELECT floor(AVG (r.grid)) as avgStart
                FROM results r
                INNER JOIN drivers d USING (driverId)
                WHERE d.driverId = ?
                "
            );

            $query->execute([$_POST["idRight"]]); 

            $avgStartRight = $query -> fetchAll(PDO::FETCH_ASSOC);

            return $avgStartRight;
        }

        // VER AS MELHORES MEDIAS PARA FAZER O TOP DE SEMPRE 
        
        public function getAvgFinishLeft(){

            //AVG FINISH LEFT
            $query=$this->db->prepare(
                "SELECT floor(AVG (r.position)) as avgFinish
                FROM results r
                INNER JOIN drivers d USING (driverId)
                WHERE d.driverId = ?"
            );

            $query->execute([$_POST["idLeft"]]);

            $avgFinishLeft = $query-> fetchAll(PDO::FETCH_ASSOC);

            return $avgFinishLeft;        
        }

        public function getAvgFinishRight(){

            //AVG FINISH RIGHT
            $query=$this->db->prepare(
                "SELECT floor(AVG (r.position)) as avgFinish
                FROM results r
                INNER JOIN drivers d USING (driverId)
                WHERE d.driverId = ?"
            );

            $query->execute([$_POST["idRight"]]);

            $avgFinishRight = $query-> fetchAll(PDO::FETCH_ASSOC);

            return $avgFinishRight;        
        }

        public function getPolePositionsLeft(){

            //POLE POSITIONS LEFT
            $query=$this->db->prepare(
                "SELECT COUNT(r.position) AS polePositions
                FROM results r
                INNER JOIN drivers d USING (driverID)
                WHERE d.driverId = ? AND r.position = 1"
            );

            $query->execute([$_POST["idLeft"]]);

            $polePositionsLeft =$query->fetchAll(PDO::FETCH_ASSOC);

            return $polePositionsLeft;
        }

        public function getPolePositionsRight(){

            //POLE POSITIONS RIGHT
            $query=$this->db->prepare(
                "SELECT COUNT(r.position) AS polePositions
                FROM results r
                INNER JOIN drivers d USING (driverID)
                WHERE d.driverId = ? AND r.position = 1"
            );

            $query->execute([$_POST["idRight"]]);

            $polePositionsRight =$query->fetchAll(PDO::FETCH_ASSOC);

            return $polePositionsRight;
        }

        public function getPodiumsLeft(){

            //PODIUMS LEFT
            $query=$this->db->prepare(
                "SELECT COUNT(r.position) AS podiums
                FROM results r
                INNER JOIN drivers d USING (driverID)
                WHERE d.driverId = ? AND r.position < 4"
            );

            $query->execute([$_POST["idLeft"]]);

            $podiumsLeft =$query->fetchAll(PDO::FETCH_ASSOC);

            return $podiumsLeft;
        }

        public function getPodiumsRight(){

            //PODIUMS RIGHT
            $query=$this->db->prepare(
                "SELECT COUNT(r.position) AS podiums
                FROM results r
                INNER JOIN drivers d USING (driverID)
                WHERE d.driverId = ? AND r.position < 4"
            );

            $query->execute([$_POST["idRight"]]);

            $podiumsRight =$query->fetchAll(PDO::FETCH_ASSOC);

            return $podiumsRight;
        }

        public function getDnfLeft(){

            //GetDNFs LEFT
            $query=$this->db->prepare(
                "SELECT COUNT(r.raceId) AS dnf
                FROM results r 
                INNER JOIN drivers d USING (driverId)
                WHERE driverId =? AND r.statusId IN ( 2,3,4,5,6,7,8,9,10,20,21,22,23,24,25)
                "
            );

            $query->execute([$_POST["idLeft"]]);

            $dnfLeft = $query ->fetchAll(PDO::FETCH_ASSOC);

            return $dnfLeft;

        }

        public function getDnfRight(){

            //GetDNFs
            $query=$this->db->prepare(
                "SELECT COUNT(r.raceId) AS dnf
                FROM results r 
                INNER JOIN drivers d USING (driverId)
                WHERE driverId =? AND r.statusId IN ( 2,3,4,5,6,7,8,9,10,20,21,22,23,24,25)
                "
            );

            $query->execute([$_POST["idRight"]]);

            $dnfRight = $query ->fetchAll(PDO::FETCH_ASSOC);

            return $dnfRight;

        }

    }
?>