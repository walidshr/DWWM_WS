<?php
$tableau1 = [];  
$prenom1 = readline("Saisir le prénom de l'élève 1 : ");

for ($i=0;$i<10;$i++){
    $notes1=readline("Saisir les notes de $prenom1 : ");
    $tableau1[$i] = $notes1;
}

foreach($tableau1 as $value1){
        echo $value1 . "\n";
    }




  ?>