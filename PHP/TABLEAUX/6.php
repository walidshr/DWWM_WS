<?php

$tableau = [];

$valeurs=readline("Entrez le nombre de valeurs souhaitées : ");
$somme=0;

for($i=0;$i<$valeurs;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
    $somme=$somme+$saisie;
    
}


foreach($tableau as $value){
    echo $value. "\n";
}

echo "Voici la somme des données : $somme  ";


?>