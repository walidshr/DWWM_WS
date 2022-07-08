<?php

$tableau = [];

$valeurs=readline("Entrez le nombre de valeurs souhaitées : ");

for($i=0;$i<$valeurs;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie +1;

}

foreach($tableau as $value){
    echo $value. "\n";
}



?>