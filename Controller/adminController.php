<?php
require_once "../model/adminModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="lister";
    }
switch ($action){
    case "lister":
		$listeV=Admin::getAll();
		require "";
		break;
    case "ajout1":
        require "";
        break ;
    case "ajout2":
        $nom = $_POST["nom"];
        $pren = $_POST["prenom"];
        $login = $_POST["login"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
        Admin::insert($nom , $pren ,$login , $pwd , $email);
        require_once "";
        break ;
    case "modif1":
			$ida = $_REQUEST["ida"];
			$a =Admin::getById($ida); 
			require_once "";
			break ;
	case "modif2":
        $id = $_POST["id"];
        $nom = $_POST["nom"];
        $pren = $_POST["prenom"];
        $login = $_POST["login"];
        $pwd = $_POST["pwd"];
        $email = $_POST["email"];
        Admin::Update($id,$nom,$prenom,$login , $pwd , $email);
			require "" ;
			break ;
	case "supprimer":
			$ida = $_REQUEST["ida"];
			$res = Admin::delete($ida);
			require "";
			break ;


	}
		