<?php
require_once "../model/postModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="lister";
    }
switch ($action){
    case "lister":
		$listeV=Post::getAll();
		require "";
		break;
    case "ajout1":
        require "";
        break ;
    case "ajout2":
        $cin_vis= $_POST["cin"];
        $cont = $_POST["cont"];
        $dte = $_POST["dte"];
        
        Post::insert($cin_vis,$cont,$dte);
        require_once "";
        break ;
    case "modif1":
			$idpost = $_REQUEST["idpost"];
			$p =Post::getById($idpost); 
			require_once "";
			break ;
	case "modif2":
        $idp= $_POST["idp"];
        $cin_vis= $_POST["cin"];
        $cont = $_POST["cont"];
        $dte = $_POST["dte"];
        Post::Update($idp,$cin_vis,$cont,$dte);
			require "" ;
			break ;
	case "supprimer":
			$idp = $_REQUEST["idp"];
			$res = Post::delete($idp);
			require "";
			break ;



	}
		