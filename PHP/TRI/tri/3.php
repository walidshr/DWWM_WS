<?php
$longueurTab = readline("Quelle est la longueur du tableau : ");
$tab = [];
$temp = 0;



for($i=$longueurTab;$i<count($tab);$i--){
    $tab[$i]=readline("Entrez un nombre : ");
}


foreach($tab as $value){
    echo " ";
    echo $value;
    krsort($tab);
}
echo "\n ";




?>