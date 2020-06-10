<?php

    require("models/users.php");

    $userAcess = new Users();

    if(isset($_POST["send2"])){
        $register = $userAcess->signUp($_POST);
    }

    if(isset($_POST["send1"])){

        $login = $userAcess->login($_POST);
             header("Location:".BASE_PATH);

            if($_SESSION["role_level"] == USER_LEVEL_ADMIN){
                header("Location:".BASE_PATH."adminPanel");
            }
    }
    // CREATE
    if(isset($_POST["createUserButton"])){
        $create= $userAcess->create($_POST);

        if($create){
            header("Location:".BASE_PATH."adminPanel");
        }
    }    

    // UPDATE

    if(isset($_POST["updateUserButton"])){
        $update=$userAcess->update($_POST);

        var_dump($_POST);
        if($update){
            header("Location:".BASE_PATH."adminPanel");
        }
    }

    // DELETE

    if(isset($_POST["deleteUserButton"])){
        $delete =$userAcess->delete($_POST);
        if($delete){
            header("Location:".BASE_PATH."adminPanel");
        }
    }
?>


