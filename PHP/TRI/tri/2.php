<?php
$longueurTab = readline("Quelle est la longueur du tableau : ");
$tab = [];
$temp = 0;

//Remplissage du tableau
for($i=0;$i<$longueurTab;$i++){
    $tab[$i]=readline("Entrez un nombre : ");
}
foreach($tab as $value){
    echo " ";
    echo $value;
}
echo "\n ";

// Tri par selection


for($i=0;$i<count($tab);$i++){
    for($j=$i+1;$j<count($tab);$j++){
        if($tab[$j]>$tab[$i]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
        }
    }
}


foreach($tab as $value){
    echo "  ";
    echo $value;
}





?>