
<?php

if (isset($_request["controller"])){
    $controller = $_REQUEST["controller"];
}
else {
    $controller="visiteur"; 
}
if (isset($_request["action"])){
    $action = $_request["action"];
}
else {
    $action = "ajout1";
}


switch ($controller){
    case "artisant";
    require "Controller/artisantController.php";
    break;
    case "visiteur";
    require "Controller/visiteurController.php";
    break;
}




?>