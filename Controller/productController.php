<?php
require_once "../model/productModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="lister";
    }
switch ($action){
    case "lister":
		$listeV=Product::getAll();
		require "";
		break;
    case "ajout1":
        require "";
        break ;
    case "ajout2":
        $lib = $_POST["lib"];
        $qte = $_POST["qte"];
        $prix = $_POST["prix"];
        $cin_art = $_POST["cinart"];
        
        Product::insert($lib,$qte,$prix,$cin_art);
        require_once "";
        break ;
    case "modif1":
			$idp = $_REQUEST["idp"];
			$p =Product::getById($idp); 
			require_once "";
			break ;
	case "modif2":
        $lib = $_POST["lib"];
        $qte = $_POST["qte"];
        $prix = $_POST["prix"];
        
        Product::Update($lib,$qte,$prix);
			require "" ;
			break ;
	case "supprimer":
			$idp = $_REQUEST["idp"];
			$res = Product::delete($idp);
			require "";
			break ;



	}
		