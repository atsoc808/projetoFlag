<?php 
require("controllers/userAcess.php");

    if(isset($_SESSION["user_level"]) && $_SESSION["user_level"] === USER_LEVEL_ADMIN){

        require("views/adminPanel.php");
        
    }else{
        header("HTTP/1.1 403 Forbidden");
        require ("views/403ERROR.php");
    }

    
?>