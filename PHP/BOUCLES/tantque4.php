<?php

$nombre = readline("Entrez un nombre : ");
$valeurmax = $nombre;
$compteur = 1;
$rang = 0;


while($nombre != 0){
    $nombre = readline("Entrez un nombre : ") ;
    
    $compteur=$compteur+1;


    if($nombre > $valeurmax){
    $valeurmax = $nombre;
    $rang = $compteur;
}
} 

echo "Nombre le plus grand : $valeurmax, placé au rang : $rang";

?>