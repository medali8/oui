<?php 
function connect_db(){
    try{
    $db = new PDO ("mysql:host=localhost;dbname=hackathon" , "root" , "");
    return $db ;
    } catch (PDOException $e) {
        die ($e->getMessage());
    }

}