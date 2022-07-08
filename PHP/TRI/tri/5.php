<?php

$longueurTab = readline("Quelle est la longueur du tableau : ");
$tab = [];
$doublon = 0;

for($i=0;$i<$longueurTab;$i++){
    $tab[$i]=readline("Entrez un nombre : ");
    if($tab[$i]==$tab[$i-1]){
    $doublon=$doublon+1;
}
}

foreach($tab as $value){
    echo " ";
    echo $value;
}

if ($doublon>=1){
    echo "Il y a un ou plusieurs doublons";
}else{
    "Il n'y pas de doublon";
}

echo "\n ";




?>