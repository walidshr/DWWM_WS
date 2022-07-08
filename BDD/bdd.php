<?php
//$pdo = new PDO("mysql:host=localhost;dbname=clients","root","");
try{
    $pdo = new PDO("mysql:host=localhost;dbname=bdd","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}

//methode prepare
$req = $pdo->prepare("INSERT into client(identifiant,nom,prenom,ville) values (?,?,?,?)");

 //methode execute
 $req->execute(array(7,"tito","titi","bk"));

 //Modification
 $req = $pdo->prepare("UPDATE client set ville=? where identifiant=?");
 $req->execute(array("BX",7));

 //Suppression
$req = $pdo->prepare("DELETE FROM client where identifiant=?");
$req->execute(array(7));



?>