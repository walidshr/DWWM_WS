<?php
  

    $didier = array(
        'Prénom' => 'Didier',
        'Age' => 35,
        'Ville' => 'Dunkerque',
    )  ;

    $rene = array(
        'Prénom' => 'René',
        'Age' => 45,
        'Ville' => 'Lille',
    )  ;

    $gerard = array(
        'Prénom' => 'Gérard',
        'Age' => 22,
        'Ville' => 'Paris',
    )  ;

    
    echo " \n";

    foreach($didier as $key=>$value){
        echo $key . " : " .  $value;
        echo "\n";
    }
    echo " \n";

    foreach($rene as $key=>$value){
        echo $key . " : " .  $value;
        echo "\n";
    }
    echo " \n";

    foreach($gerard as $key=>$value){
        echo $key . " : " .  $value;
        echo "\n";
    }
    echo " \n";


   


?>