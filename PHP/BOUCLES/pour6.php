<?php

$n = readline("Nombre de chevaux partants : ");
$p=readline("Nombre de chevaux joués : ");

$factoriellen = 1;
$factoriellep = 1;
$factoriellenp = ($n-$p);
$factoriellenp = 1;


for($i=1;$i<=$n;$i++){  
    $factoriellen=$factoriellen*$i;
}

for($i=1;$i<=$p;$i++){  
    $factoriellep=$factoriellep*$i;
}

for($i=1;$i<=$p;$i++){  
    $factoriellenp=$factoriellenp*$i;
}

$X = $factoriellen/$factoriellenp ;
$Y = $factoriellen/($factoriellep*$factoriellenp);


echo "Dans l'ordre : une chance sur $X de gagner " ."\n";
echo "Dans le désordre : une chance sur $Y de gagner";




?>