    <?php
    session_start();
    setlocale (LC_ALL,"pt_PT.UTF-8");

    $url_parts = explode("/",$_SERVER["REQUEST_URI"]);
    // var_dump($url_parts);

    define("BASE_PATH", "/");
    define('USER_LEVEL_ADMIN','1');

    $controller = "home";

    $controllers = ["home", "compare", "driverProfile","logout","myProfile","adminPanel"];

    if(isset($url_parts[1]) && in_array($url_parts[1], $controllers) ) {
        $controller = $url_parts[1];
    }

    require("controllers/".$controller.".php");

    ?>