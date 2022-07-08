<?php

$tableau = [];
$nbpositives=0;
$nbnegatives=0;

$valeurs=readline("Entrez le nombre de valeurs souhaitées : ");

for($i=0;$i<$valeurs;$i++){
    $saisie=readline("Entrez une valeur : ");  
    $tableau[$i] = $saisie;
    if($saisie>0){
        $nbpositives=$nbpositives+1;
    }elseif($saisie<0){
        $nbnegatives=$nbnegatives+1;
    }
}


foreach($tableau as $value){
    echo $value. "\n";
}


echo "Nombre de valeurs positives : $nbpositives ";
echo "Nombre de valeurs négatives : $nbnegatives ";


?>