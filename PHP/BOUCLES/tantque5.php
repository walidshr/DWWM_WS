<?php

$nombre = readline("Entrez un nombre : ");
$somme = $nombre;
$billetdedix = 0;
$monnaie = 0;
$monnaiecinq = 0;
$billetdecinq = 0;
$piecedeun = 0;

while ($nombre != 0){
    $nombre = readline("Entrez un nombre : ");
    $somme = $nombre + $somme;
    echo $somme;
} 

echo "Somme à payer : $somme € ";
$paiement = readline("Paiement : ");

$monnaie = $paiement - $somme;

echo "Montant à rendre : $monnaie € ";

if ($monnaie >= 1){
    $billetdedix = intdiv($monnaie,10);
    $monnaiecinq = $monnaie - ($billetdedix * 10);
    $billetdecinq = intdiv($monnaiecinq,5);
    $piecedeun = $monnaie - (($billetdedix *10)+($billetdecinq*5));
}

echo "Billets de 10 : $billetdedix" ."\n";
echo "Billets de 5 : $billetdecinq" ."\n";
echo "Pièces de 1 : $piecedeun" ."\n";


?>