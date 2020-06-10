<?php
var_dump($url_parts[1]);
if($url_parts[1] === "logout"){
session_destroy();

header("Location:".BASE_PATH);

}
?>