<?php

$tableau = [];

$somme = 0;

for($i=0;$i<9;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
    $somme = $somme + $tableau[$i];
    $moyenne = $somme/9;
    
}
echo "La somme est égale à $somme ";
echo "Moyenne : $moyenne ";

?>