<?php
class Artisant {
   public $cin ; 
   public $nom ;
   public $prenom;
   public $email;
   public $pwd;
   public $numtel;
   public $gov ;
   
   public function __construct($cin=null , $nom=null , $prenom=null , $email=null , $numtel=null , $pwd=null , $gov=null){
        $this->cin = $cin;
        $this->nom = $nom;   
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numtel = $numtel;
        $this->pwd = $pwd;
        $this->gov = $gov ;
       
   }

   public static function getAll(){
       
       $db = connect_db();
       $req = "select * from artisant";
       $liste = [];
       try {
           $res = $db->query($req);
           $liste = $res->fetchAll(PDO::FETCH_OBJ);
       }catch (PDOExecption $e){
           die ($e->getMessage());
       }
       return $liste ;
   }
   public static function getById($cin){
       $db = connect_db();
       $req="select * from artisant where cin=$cin";
       try {
           $res=$db->query($req);
           if ($res->rowCount()==1){
               $artisant = $res->fetchObject();
               return $user;
           }
           else {
               return false ;
           }
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
   public static function authent($email,$pwd){
    $db = connect_db();
    $req="select * from artisant where email='$email' and pwd='$pwd'";
    try {
        $res=$db->query($req);
        if ($res->rowCount()==1){
            return true ;
        }
        else {
            return false ;
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}

   public static function insert($cin ,$nom , $prenom , $email , $numtel , $pwd ,$gov){
       
       $db=connect_db();
       $req = "insert into artisant (cin , nom , prenom , email , pwd , num_tel ,gov)values(:cin , :nom , :prenom , :email , :pwd , :numtel ,:gov)";
       $res= $db->prepare($req);
        $res->bindParam(":cin" ,$cin);
        $res->bindParam(":nom",$nom);
        $res->bindParam(":prenom",$prenom);
        $res->bindParam(":email",$email);
        $res->bindParam(":pwd",$pwd);
        $res->bindParam(":numtel",$numtel);
        $res->bindParam(":gob",$gov);

       try {
          $resultat = $res->execute();
          if ($resultat){
               return $db->LastInsertId();
          }
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($cin ,$nom , $prenom , $email , $numtel,$pwd ,$gov){
       
       $db=connect_db();
       $req="update artisant 
       set nom=:nom ,prenom=:prenom ,adresse=:adresse ,email=:email ,num_tel=:numtel  ,pwd=:pwd , gob=:gov
       where cin=:cin";
       $res = $db->prepare($req);
       $res->bindParam(":cin" ,$cin);
       $res->bindParam(":nom",$nom);
       $res->bindParam(":prenom",$prenom);
       $res->bindParam(":email",$email);
       $res->bindParam(":pwd",$pwd);
       $res->bindParam(":numtel",$numtel);
       $res->bindParam(":gov",$gov);

       try{
           $res2=$res->execute();
           return $res2 ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($cin){
    $db =connect_db();
       $req="delete from artisant where cinOUnumpassp=$cin";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>