<?php

$tableau = [];

$valeurs=readline("Entrez le nombre de valeurs souhaitées : ");

$valeurmax=0;
$somme=0;
$sommenote=0;

for($i=0;$i<$valeurs;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
    $somme=$somme+$saisie;
    $moyenne=$somme/$valeurs;

}

foreach($tableau as $value){
    echo $value. "\n";
}

if($saisie>$moyenne){
    $sommenote=$sommenote+1;
}

echo "La moyenne de la classe est de : $moyenne ";
echo "Le nombre de notes au dessus de la moyenne est de : $sommenote ";


?>