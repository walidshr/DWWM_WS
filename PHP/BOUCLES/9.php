<?php

$heure = readline("Indiquez l'heure : ");
$minute = readline("Indiquez les minutes : ");
$seconde = readline("Indiquez les secondes : ");

$minutes = $minute +1;
$heures = $heure +1;
$secondes = $seconde +1;

if ($heure <= 23 and $minute <=59 and $seconde <= 58){
    echo "Dans une seconde, il sera $heure heure $minute minutes et $secondes secondes ";
}

elseif ($heure <=23 and $minute <=58 and $seconde = 59){
    echo "Dans une seconde, il sera $heure heure $minutes minutes et 0 seconde ";
}

elseif ($heure <=22 and $minute = 59 and $seconde = 59){
   echo "Dans une seconde, il sera $heures heure 0 minute et 0 seconde "; 
}


elseif ($heure = 23 and $minute = 59 and $seconde = 59 ){
    echo "Dans une seconde, il sera 0 heure 0 minute et 0 seconde ";

}

?>



