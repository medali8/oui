<?php 
class Commande{
public $id_cmd;
public $cin_vis ;
public $id_prod;
public $qte ;
public $prix_tot;
public $date_cmd;

public function __construct($id_cmd=null , $cin_vis =null ,$id_prod=null , $qte=null , $prix_tot=null , $date_cmd=null){
    $this->id_cmd=$id_cmd;
    $this->cin_vis=$cin_vis;
    $this->id_prod=$id_prod;
    $this->qte = $qte ;
    $this->prix_tot=$prix_tot;
    $this->date_cmd=$date_cmd;

}
public static function getAll(){
    $db = connect_db();
    $req = "select * from commande";
    $listeP = [];
    try{
        $res=$db->query($req);
        return $listeP;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function getById($idc){
    $db=connect_db();
    $req="select * from commande where id_cmd=$idc";
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
public static function insert($cin_vis,$id_prod,$qte,$prix_tot,$date_cmd){
    $db=connect_db();
    $req="insert into commande (cin_vis , id_prod , qte, prix_tot , date_cmd) values (:cin_vis , :id_prod , :qte , :prix_tot , :date_cmd)";
    $res=$db->preapre($req);
    $res->bindParam(":cin_vis",$cin_vis);
    $res->bindParam(":id_prod",$id_prod);
    $res->bindParam(":qte",$qte);
    $res->bindParam(":prix_tot",$prix_tot);
    $res->bindParam(":date_cmd",$date_cmd);

    try{
        $resulat = $res->execute();
        if ($resultat){
            return $db->LastInsertId();
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function Update($id_cmd , $id_prod , $qte , $prix_tot , $date_cmd){
    $db=connect_db();
    $req="update commande set id_prod=:id_prod , qte=:qte , prix_tot=:prix_tot , date_cmd=:date_cmd
    where id_cmd=:id";
    $res=$db->perapre($req);
    
    $res->bindParam(":id_prod",$id_prod);
    $res->bindParam(":qte",$qte);
    $res->bindParam(":prix_tot",$prix_tot);
    $res->bindParam(":date_cmd",$date_cmd);
    $res->bindParam(":id",$id_cmd);
    try {
        $resultat = $res->execute();
        return $resultat;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
    public static function delete ($idc){
    $db=connect_db();
    $req="delete * from commande where id_cmd=$idc";
    try {
        $res=$db->exec($req);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    }
    
}