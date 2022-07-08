<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=Projet","kevin","");
}catch(PDOException $e){
    echo $e->getMessage();
}

?>