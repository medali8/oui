<?php 
class Product{
public $id ;
public $lib ;
public $qte_stock;
public $prix ;
public $cin_art;

public function __construct($id=null , $lib =null ,$qte_stock=null , $prix=null , $cin_art=null){
    $this->id=$id;
    $this->lib=$lib;
    $this->qte_stock=$qte_stock;
    $this->prix=$prix;
    $this->cin_art=$cin_art;

}
public static function getAll(){
    $db = connect_db();
    $req = "select * from product";
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
    $req="select * from product where id_prod=$idp";
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
public static function insert($lib,$qte,$prix,$cin_art){
    $db=connect_db();
    $req="insert into product (lib_prod , qte_stock , prix, cin_art) values (:lib , :qte , :prix , :cin_art)";
    $res=$db->preapre($req);
    $res->bindParam(":lib",$lib);
    $res->bindParam(":qte",$qte);
    $res->bindParam(":prix",$prix);
    $res->bindParam(":cin_art",$cin_art);
    try{
        $resulat = $res->execute();
        if ($resultat){
            return $db->LastInsertId();
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function Update($id , $lib , $qte , $prix){
    $db=connect_db();
    $req="update product set lib_prod=:lib , qte_stock=:qte , prix=:prix
    where id_prod=:id";
    $res=$db->perapre($req);
    $res->bindParam(":lib",$lib);
    $res->bindParam(":qte",$qte);
    $res->bindParam(":prix",$prix);
    try {
        $resultat = $res->execute();
        return $resultat;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
    public static function delete ($idp){
    $db=connect_db();
    $req="delete * from product where id_prod=$idp";
    try {
        $res=$db->exec($req);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    }
    
}