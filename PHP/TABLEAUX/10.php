<?php

$tableau = [];

$valeurs=readline("Entrez le nombre de valeurs souhaitées : ");

$valeurmax=0;

for($i=0;$i<$valeurs;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
    if($saisie>$valeurmax){
      $valeurmax=$saisie;
      $position=$i+1;  
    }
}

foreach($tableau as $value){
    echo $value. "\n";
}

echo "La plus grande valeur est : $valeurmax ";
echo "Sa position est $position ";

?>