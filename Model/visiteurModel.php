<?php
class Visiteur {
   public $cin ; 
   public $nom ;
   public $prenom;
   public $email;
   public $pwd;
   public $numtel;
   public $country ;
   
   
   
   public function __construct($cin=null , $nom=null , $prenom=null , $email=null , $numtel=null , $pwd=null ,$country = null){
        $this->cin = $cin;
        $this->nom = $nom;   
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numtel = $numtel;
        $this->pwd = $pwd;
        $this->country = $country;
       
   }

   public static function getAll(){
       
       $db = connect_db();
       $req = "select * from visiteur";
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
       $req="select * from visiteur where cinOUnumpassp=$cin";
       try {
           $res=$db->query($req);
           if ($res->rowCount()==1){
               $visiteur = $res->fetchObject();
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
    try {
        $req="select * from visiteur where email='$email' and pwd='$pwd'";
        $res = $db->query($req);
        return $res->fetchObject();

        
        }catch(PDOException $e){
        die($e->getMessage());
    }
}

   public static function insert($cin ,$nom , $prenom , $email , $numtel , $pwd, $country){
       
       $db=connect_db();
       $req = "insert into visiteur (cinOUnumpassp , nom , prenom , email , pwd , num_tel , country )values(:cin , :nom , :prenom , :email , :pwd , :numtel ,:country)";
       $res= $db->prepare($req);
        $res->bindParam(":cin" ,$cin);
        $res->bindParam(":nom",$nom);
        $res->bindParam(":prenom",$prenom);
        $res->bindParam(":email",$email);
        $res->bindParam(":pwd",$pwd);
        $res->bindParam(":numtel",$numtel);
        $res->bindParam(":country",$country);

       try {
          $resultat = $res->execute();
          if ($resultat){
               return $db->LastInsertId();
          }
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($cin ,$nom , $prenom , $email , $numtel , $pwd , $country ){
       
       $db=connect_db();
       $req="update visiteur 
       set nom=:nom ,prenom=:prenom ,adresse=:adresse ,email=:email ,num_tel=:numtel  ,pwd=:pwd , country =:country
       where cinOUnumpassp=:cin";
       $res = $db->prepare($req);
       $res->bindParam(":cin" ,$cin);
       $res->bindParam(":nom",$nom);
       $res->bindParam(":prenom",$prenom);
       $res->bindParam(":email",$email);
       $res->bindParam(":pwd",$pwd);
       $res->bindParam(":numtel",$numtel);
       $res->bindParam(":country",$country);

       try{
           $resultat=$res->execute();
           return $res ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($cin){
    $db =connect_db();
       $req="delete from visiteur where cinOUnumpassp=$cin";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>