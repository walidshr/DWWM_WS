<?php

$age = readline("Quel age avez vous ? ");
$permis = readline("Combien d'années de permis avez-vous ? ");
$accident = readline("Combien d'accident(s) avez-vous effectués ? ");
$anciennete = readline("Combien d'années etes-vous client chez nous ? ");


if ($age < 25 and $permis < 2 and $accident == 0 and $anciennete < 5){
    echo "TARIF ROUGE";
}

elseif ($age < 25 and $permis < 2 and $accident == 0 and $anciennete >= 5){
    echo "TARIF ORANGE";
}

elseif ($age < 25 and $permis >= 2 and $accident == 0 and $anciennete < 5){
    echo "TARIF ORANGE";
}

elseif ($age < 25 and $permis >= 2 and $accident == 0 and $anciennete >= 5){
    echo "TARIF VERT";
}

elseif ($age < 25 and $permis >= 2 and $accident == 1 and $anciennete < 5){
    echo "TARIF ROUGE";
}

elseif ($age < 25 and $permis >= 2 and $accident == 1 and $anciennete >= 5){
    echo "TARIF ORANGE";
}

elseif ($age >= 25 and $permis < 2 and $accident == 0 and $anciennete < 5){
    echo "TARIF ORANGE";
}

elseif ($age >= 25 and $permis < 2 and $accident == 0 and $anciennete >= 5){
    echo "TARIF VERT";
}

elseif ($age >= 25 and $permis < 2 and $accident == 1 and $anciennete < 5){
    echo "TARIF ROUGE";
}

elseif ($age >= 25 and $permis < 2 and $accident == 1 and $anciennete >= 5){
    echo "TARIF ORANGE";
}

elseif ($age >= 25 and $permis >= 2 and $accident == 0 and $anciennete < 5){
    echo "TARIF VERT";
}

elseif ($age > 25 and $permis > 2 and $accident == 0 and $anciennete >= 5){
    echo "TARIF BLEU";
}

elseif ($age >= 25 and $permis >= 2 and $accident == 1 and $anciennete < 5){
    echo "TARIF ORANGE";
}

elseif ($age >= 25 and $permis >= 2 and $accident == 1 and $anciennete >= 5){
    echo "TARIF VERT";
}


elseif ($age >= 25 and $permis >= 2 and $accident == 2 and $anciennete < 5){
    echo "TARIF ROUGE";
}

elseif ($age >= 25 and $permis >= 2 and $accident == 2 and $anciennete > 5){
    echo "TARIF ORANGE";
}





?>