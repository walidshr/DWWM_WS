<?php
$tab = [12][8];
$valeurmax=0;
for($i=1;$i<9;$i++){
    echo " \n ";
    for($j=1;$j<13;$j++){
        $tab[$i][$j] = $i * $j;
        echo $tab[$i][$j];
        echo " ";     
    }
   

}

echo max($tab[$i][$j]);



?>