<?php 
class Event{
public $id_event ;
public $nom_event;
public $add;
public $date_event ;
public $desc;

public function __construct($id=null , $nom_event =null ,$add=null , $date_event=null , $desc=null){
    $this->id=$id;
    $this->nom_event=$nom_event;
    $this->add=$add;
    $this->date_event=$date_event;
    $this->desc=$desc;

}
public static function getAll(){
    $db = connect_db();
    $req = "select * from evenement";
    $listeP = [];
    try{
        $res=$db->query($req);
        return $listeP;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function getById($ide){
    $db=connect_db();
    $req="select * from product where id_even=$ide";
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
public static function insert($nom,$add,$dte,$desc){
    $db=connect_db();
    $req="insert into evenement (nom_event , adresse , date_event, description) values (:nom , :add , :dte , :desc)";
    $res=$db->preapre($req);
    $res->bindParam(":nom",$nom);
    $res->bindParam(":add",$add);
    $res->bindParam(":dte",$dte);
    $res->bindParam(":desc",$desc);
    try{
        $resulat = $res->execute();
        if ($resultat){
            return $db->LastInsertId();
        }
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
public static function Update($id_event,$nom,$add,$date, $desc){
    $db=connect_db();
    $req="update evenement set nom_event=:nom_event , adresse=:add , date_event=:date , description =: desc
    where id_event=:id";
    $res=$db->perapre($req);
    $res->bindParam(":id",$id);
    $res->bindParam(":nom_event",$nom);
    $res->bindParam(":add",$add);
    $res->bindParam(":date",$date);
    $res->bindParam(":desc",$desc);
    try {
        $resultat = $res->execute();
        return $resultat;
    }catch(PDOException $e){
        die($e->getMessage());
    }
}
    public static function delete ($ide){
    $db=connect_db();
    $req="delete * from evenement where id_event=$ide";
    try {
        $res=$db->exec($req);
    }catch(PDOException $e){
        die($e->getMessage());
    }
    }
    
}