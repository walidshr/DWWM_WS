<?php

$tabmots = ["armoire","bonjour","chaise","framboise","lumiere","maison","porte","roue","tortue","wagon"];
$tabposition = [1,2,3,4,5,6,7,8,9,10];
$temp = 0;

for($i=1;$i<2;$i++){
    $tabmots [$i]=readline("Entrez un mot : ");
    $tabmots [$i] = $tabposition [$i];
    
}

echo $tabposition;

echo "\n ";




?>