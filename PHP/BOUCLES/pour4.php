<?php

$nombre = readline("Ecrire un nombre : ");
$factorielle = 1;

for($i=1;$i<=$nombre;$i++){  
    $factorielle=$factorielle*$i;
    

}

echo $factorielle;  




?>