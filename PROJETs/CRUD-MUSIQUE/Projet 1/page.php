<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Merci pour la connexion</h1>
</body>
</html>

<?php
require 'database';
$sql = 'SELECT * FROM Artistes';

$req = $pdo->query($sql);
$req = $pdo->prepare($sql);
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();

$tab = $req->fetchAll();

for($i=0;$i<count($tab);$i++){
    echo "<tr>"."<td>".$tab[$i]["nom_artiste"]." ".$tab[$i]["prenom_artiste"]." ".$tab[$i]["password"]."</td>"."<tr/>"."<br/>";
}
?>