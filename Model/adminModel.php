<?php
class Admin {
   public $id ; 
   public $nom ;
   public $prenom;
   public $login;
   public $pwd;
   public $email;
   
   
   
   public function __construct($id=null , $nom=null , $prenom=null , $login=null , $pwd=null , $email=null){
        $this->id = $id;
        $this->nom = $nom;   
        $this->prenom = $prenom;
        $this->login = $login;
        $this->pwd = $pwd;
        $this->email = $email;
       
   }

   public static function getAll(){
       
       $db = connect_db();
       $req = "select * from admin";
       $liste = [];
       try {
           $res = $db->query($req);
           $liste = $res->fetchAll(PDO::FETCH_OBJ);
       }catch (PDOExecption $e){
           die ($e->getMessage());
       }
       return $liste ;
   }
   public static function getById($id){
       $db = connect_db();
       $req="select * from admin where id_ad=$id";
       try {
           $res=$db->query($req);
           if ($res->rowCount()==1){
               $admin = $res->fetchObject();
               return $user;
           }
           else {
               return false ;
           }
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
   public static function authent($login,$pwd){
    $db = connect_db();
    $req="select * from admin where login_ad='$login' and pwd_ad='$pwd'";
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

   public static function insert($nom , $prenom , $login , $pwd ,$email){
       
       $db=connect_db();
       $req = "insert into admin ( nom_ad , prenom_ad , login_ad , pwd_ad , email)values( :nom , :prenom , :login , :pwd , :email )";
       $res= $db->prepare($req);
        $res->bindParam(":nom",$nom);
        $res->bindParam(":prenom",$prenom);
        $res->bindParam(":login",$login);
        $res->bindParam(":pwd",$pwd);
        $res->bindParam(":email",$email);
       try {
          $resultat = $res->execute();
          if ($resultat){
               return $db->LastInsertId();
          }
       }catch(PDOException $e){
           die ($e->getMessage());
       }
   }
   

   public static function Update($id ,$nom , $prenom , $login , $pwd , $email ){
       
       $db=connect_db();
       $req="update admin 
       set nom_ad=:nom ,prenom_ad=:prenom ,login_ad=:login ,pwd_ad=:pwd ,email=:email
       where id_ad=:id";
       $res = $db->prepare($req);
       $res->bindParam(":id" ,$id);
       $res->bindParam(":nom_ad",$nom);
       $res->bindParam(":prenom_ad",$prenom);
       $res->bindParam(":login_ad",$login);
       $res->bindParam(":pwd_ad",$pwd);
       $res->bindParam(":email",$email);
       try{
           $resultat=$res->execute();
           return $resultat ;
           
       }catch(PDOException $e){
           die($e->getMessage());
       }

   }

   
   

   public static function delete ($id){
    $db =connect_db();
       $req="delete from admin where id_ad=$cin";
       try{
           $res=$db->exec($req);
           return $res ;
       }catch(PDOException $e){
           die($e->getMessage());
       }
   }
  






}
?>