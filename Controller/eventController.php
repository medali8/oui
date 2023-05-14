<?php
require_once "../model/eventModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="lister";
    }
switch ($action){
    case "lister":
		$listeV=Event::getAll();
		require "";
		break;
    case "ajout1":
        require "";
        break ;
    case "ajout2":
        $nom= $_POST["cin"];
        $add = $_POST["cont"];
        $date = $_POST["dte"];
        $desc = $_POST["desc"];
        Event::insert($nom,$add,$date,$desc);
        require_once "";
        break ;
    case "modif1":
			$idevent = $_REQUEST["ide"];
			$p =Event::getById($idevent); 
			require_once "";
			break ;
	case "modif2":
        $ide= $_POST["ide"];
        $nom= $_POST["cin"];
        $add = $_POST["cont"];
        $date = $_POST["dte"];
        $desc = $_POST["desc"];
        Event::Update($ide,$nom,$add,$date,$desc);
			require "" ;
			break ;
	case "supprimer":
			$idevent = $_REQUEST["ide"];
			$res = Event::delete($idevent);
			require "";
			break ;



	}
		