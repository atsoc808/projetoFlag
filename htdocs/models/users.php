<?php

require_once("base.php");

class Users extends Base{

    public function signUp($data){

        $query=$this->db->prepare(
        "
        INSERT INTO users
        (name ,email, password)
        VALUES (?,?,?)
        ");

        $query->execute([
            $data["username"],  
            $data["email"],
            password_hash($data["password"],PASSWORD_DEFAULT) ]);

        return true;

    }

    public function login($data){

        if(
            !empty($data["email"]) &&
            !empty($data["password"]) &&
            mb_strlen($data["password"]) <= 1000
        ) {
            $query = $this->db->prepare("
                SELECT user_id, password,name,user_level
                FROM users
                WHERE email = ?
            ");

            $query->execute([
                $data["email"]
            ]);

            $user = $query->fetch( PDO::FETCH_ASSOC );
        
            if(!empty($user) && password_verify($data["password"], $user["password"])) {
                $_SESSION["user_id"] = $user["user_id"];
                $_SESSION["name"] =$user["name"];
                $_SESSION["user_level"] = $user["user_level"];
                
                return true;
            }
        }

        return false;
    }


   //CRUD //
    // CREATE

    public function create($data){
        $query=$this->db->prepare(
            "
            INSERT INTO users
            (name ,email, password,user_level)
            VALUES (?,?,?,?)
            ");
    
            $query->execute([
                $data["username"],  
                $data["email"],
                password_hash($data["password"],PASSWORD_DEFAULT),
                $data["user_level"] 
                ]);
    
            return true;
    
    }

    public function update($data){
        /* sanitizar, validar, inserir na BD, encriptando a password*/

        if(
            !empty($data["user_id"]) &&
            !empty($data["name"]) &&
            !empty($data["email"]) &&
            mb_strlen($data["password"]) > 5 &&
            mb_strlen($data["password"]) <= 1000 &&
            filter_var($data["email"], FILTER_VALIDATE_EMAIL)
        ) {
            $query = $this->db->prepare("
            UPDATE users
            SET
                name = ?,
                email = ?,
                password = ?,
                city = ?,
                fav_team = ?,
                user_level =?
            WHERE 
                user_id = ?
        ");
        
        $result = $query->execute([
            $data["name"],
            $data["email"],
            password_hash($data["password"], PASSWORD_DEFAULT),
            $data["city"] ?? null,
            $data["team"] ?? null,
            $data["user_level"],
            $data["user_id"]
        ]);

        return $result;

        }
        
        else{
            return false;
        }
    }

    public function delete($data){

            $query = $this->db->prepare("
            DELETE FROM users
            WHERE user_id = ?
            ");

            $result = $query->execute([$data["user_id"]]);

            return $result;
        
        
    }

}
?>