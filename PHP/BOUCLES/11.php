<?php

$genre = readline("Indiquez votre genre : ");
$age = readline ("Indiquez votre age : ");

if ($genre == "M" and $age < 20){
    echo "Vous n'etes pas imposable";
}

elseif ($genre == "M" and $age >= 20){
    echo "vous etes imposable";
}

elseif ($genre == "F" and $age < 18){
    echo "vous n'etes pas imposable";
}

elseif ($genre == "F" and $age >= 18 and $age <= 35){
    echo "vous etes imposable";
}

elseif ($genre == "F" and $age > 35){
    echo "vous n'etes pas imposable";
}








?>