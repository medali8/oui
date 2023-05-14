<?php
require_once "./Model/visiteurModel.php";
require_once "./connection.php";

if (isset($_REQUEST["action"]))
$action = $_REQUEST["action"];
else {
    $action ="ajout1";
}

switch ($action){
    case "lister":
		$listeV=Visiteur::getAll();
		require "";
		break;
    case "ajout1":
        require "./LoginSignUp.php";
        break ;
    case "ajout2":
        $cin = $_POST["cin"];
        $nom = $_POST["nom"];
        $pren = $_POST["prenom"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $numtel = $_POST["number"];
        $country = $_POST["gv"];
        Visiteur::insert($cin,$nom,$pren,$email,$numtel,$pwd,$country);
        session_start();
        $_SESSION['user']=$email ;
        require_once "./addV.php";
        break ;
    case "authent1":
        require "./LoginSignUp.php";
        break ;
    case "authent2":
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $user= Visiteur::authent($email,$pwd);
        if ($user){
             session_start();
            $_SESSION["nom"]=$user->nom;
            $_SESSION['email']=$user->email;
            $_SESSION["pre"]=$user->prenom;
            $_SESSION['CoP']=$user->cinOUnumpassp;
            require_once "View/visiteurView/layout.php";
        } else echo "failed";
        break ;
    case "modif1":
			$cin = $_REQUEST["cin"];
			$v =Visiteur::getById($cin); 
			require_once "";
			break ;
	case "modif2":
			$cin=$_REQUEST["cin"];
            $nom = $_POST["nom"];
            $pren = $_POST["prenom"];
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $numtel = $_POST["ntel"];
            $country = $_POST["country"];
            Visiteur::Update($cin,$nom,$pren,$email,$numtel,$pwd,$country);
			require "" ;
			break ;
	case "supprimer":
			$cin = $_REQUEST["cin"];
			$res = Visiteur::delete($cin);
			require "";
			break ;



	}
		