<?php

$nombre = readline("Indiquez le nombre de photocopie(s) : ");
$tarif1 = 0.10;
$tarif2 = 0.09;
$tarif3 = 0.08;

$prix1 = $nombre*$tarif1;
$prix2 = $nombre*$tarif2;
$prix3 = $nombre*$tarif3;

if ($nombre <= 10){
    echo "Prix : = $prix1 €";
}

elseif($nombre <= 20 and $nombre > 10){
    echo "Prix : $prix2 €";
}

elseif($nombre > 20){
    echo "Prix : $prix3 €";
}







?>