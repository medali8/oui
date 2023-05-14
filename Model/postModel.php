<?php 
class Post{
public $id_post ;
public $cin_visiteur;
public $contenu;
public $date ;


public function __construct($id_post=null , $cin_visiteur =null ,$contenu=null , $date=null ){
    $this->id_post=$id_post;
    $this->cin=$cin_visiteur;
    $this->contenu=$contenu;
    $this->date=$date;

}
public static function getAll(){
    $db = connect_db();
    $req = "select * from posts";
    $listeP = [];
    try{
        $res=$db->query($req);
        return $listeP;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function getById($idp){
    $db=connect_db();
    $req="select * from posts where id_post=$idp";
    try{
        $res=$db->query($req);
        if ($res->rowCount==1){
            return true ;
        }
        else {
            return false ;
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function insert($cin_visiteur,$contenu,$date){
    $db=connect_db();
    $req="insert into evenement ( cin_visiteur, contenue , date) values ( :cin ,:contenue, :date)";
    $res=$db->preapre($req);
    $res->bindParam(":cin",$cin_visiteur);
    $res->bindParam(":contenue",$contenu);
    $res->bindParam(":date",$date);
    try{
        $resulat = $res->execute();
        if ($resultat){
            return $db->LastInsertId();
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function Update($id_post,$cin_visiteur,$contenu,$date){
    $db=connect_db();
    $req="update evenement set cin_visiteur=:cin , contenue=:contenue , date=:date 
    where id_post=:id_post";
    $res=$db->perapre($req);
    $res->bindParam(":id_post",$id_post);
    $res->bindParam(":cin",$cin_visiteur);
    $res->bindParam(":contenue",$contenu);
    $res->bindParam(":date",$date);
    try {
        $resultat = $res->execute();
        return $resultat;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
    public static function delete ($idp){
    $db=connect_db();
    $req="delete * from posts where id_posts=$idp";
    try {
        $res=$db->exec($req);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    }
    
}