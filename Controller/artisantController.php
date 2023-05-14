<?php
require_once "../model/artisantModel.php";
require_once "../connection.php";

	if (isset($action)){
$action = $_REQUEST["action"];
    }
    else {
        $action ="ajout1";
    }
switch ($action){
    case "lister":
		$listeV=Artisant::getAll();
		require "";
		break;
    case "ajout1":
        header ("Location:../Artisan_Portail.php");
        break ;
    case "ajout2":
        $cin = $_POST["cin"];
        $nom = $_POST["nom"];
        $pren = $_POST["prenom"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $numtel = $_POST["ntel"];
        $gov = $_POST["gov"];
        Artisant::insert($cin,$nom,$pren,$email,$numtel,$pwd,$gov);
        require_once "";
        break ;
        case "authent1":
            require "./Artisan_Portail.php";
            break ;
        case "authent2":
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            if (Artisant::authent($email,$pwd)){
                session_start();
                $_SESSION['user']=$email;
                require_once "./authent2.php";
                
            }
            break ;
    case "modif1":
			$cin = $_REQUEST["cin"];
			$a =Artisant::getById($cin); 
			require_once "";
			break ;
	case "modif2":
			$cin=$_REQUEST["cin"];
            $nom = $_POST["nom"];
            $pren = $_POST["prenom"];
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $numtel = $_POST["ntel"];
            $gov = $_POST["gov"];
            Artisant::Update($cin,$nom,$pren,$email,$numtel,$pwd,$gov);
			require "" ;
			break ;
	case "supprimer":
			$cin = $_REQUEST["cin"];
			$res = Artisant::delete($cin);
			require "";
			break ;



	}
		