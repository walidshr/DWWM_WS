<?php

$tableau = [];

for($i=0;$i<=9;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
}


// foreach($tableau as $key => $value){
//     echo "index." . $key . ":". $value. "\n";
// }


foreach($tableau as $value){
    echo $value. "\n";
}


?>