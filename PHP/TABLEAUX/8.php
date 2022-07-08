<?php


$tableau1 = [4,8,7,12];
$tableau2 = [3,6];

$somme=0;

for($i=0;$i<count($tableau1);$i++){
    $produit1=$tableau1[$i] * 3;
    $produit2=$tableau1[$i] * 6;

    $somme=$somme+$produit1+$produit2;
    
}

echo "Le Schtroumpf sera : $somme ";


?>