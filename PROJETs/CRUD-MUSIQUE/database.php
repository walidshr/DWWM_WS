<?php
//connexion à la base de données

try{
    $pdo = new PDO("mysql:host=localhost;dbname=projet","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}

?>