<?php
require_once "../model/commandeModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="lister";
    }
switch ($action){
    case "lister":
		$listeV=Commande::getAll();
		require "";
		break;
    case "ajout1":
        require "";
        break ;
    case "ajout2":
        $cin_vis= $_POST["cin"];
        $idp = $_POST["idp"];
        $qte = $_POST["qte"];
        $prix_tot = $_POST["prix_tot"];
        $dte = $_POST["dte"];
        Commande::insert($cin_vis ,$id_prod ,$qte , $prix_tot , $dte);
        require_once "";
        break ;
    case "modif1":
			$idc = $_REQUEST["idc"];
			$p =Commande::getById($idc); 
			require_once "";
			break ;
	case "modif2":
        $idp = $_POST["idp"];
        $qte = $_POST["qte"];
        $prix_tot = $_POST["prix_tot"];
        $dte = $_POST["dte"];
        
        Commande::Update($idp,$qte,$prix,$dte);
			require "" ;
			break ;
	case "supprimer":
			$idcmd = $_REQUEST["idcmd"];
			$res = Commande::delete($idcmd);
			require "";
			break ;


	}
		