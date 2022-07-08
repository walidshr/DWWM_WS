<?php
$longueurTab = readline("Quelle est la longueur du tableau : ");
$tab = [];
$temp = 0;
$consecutif = 0;

for($i=0;$i<$longueurTab;$i++){
    $tab[$i]=readline("Entrez un nombre : ");
}

foreach($tab as $value){
    echo " ";
    echo $value;
}
echo "\n ";

for($i=0;$i<$longueurTab;$i++){
    for($j=$i+1;$j<count($tab);$j++){
        if($tab[$j]<$tab[$i]){
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
        }
        if($tab[$j]==$tab[$j-1]+1){
            $consecutif=$consecutif+1;
        }
    }
}

foreach($tab as $value){
        echo "  ";
        echo $value;
    }

echo "\n ";

if ($consecutif==$longueurTab){
    echo "Les éléments sont tous consécutifs";
}else{
    echo "Les éléments ne sont pas tous consécutifs";
}


?>