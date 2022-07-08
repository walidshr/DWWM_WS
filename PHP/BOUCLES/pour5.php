<?php


$valeurmax=0;

for ($i=1;$i<=20;$i++){
    $saisie=readline("Ecire un nombre : ");
   if($saisie>$valeurmax){
        $valeurmax=$saisie;
        $position=$i;
    }

}

echo "Le nombre le plus grand est : $valeurmax ";
echo "Il sera situé en position : $position ";

 



?>