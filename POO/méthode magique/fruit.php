<?php
    require_once("classes/fruit.class.php");
    require("common/header.php");
    require("common/menu.php");
?>
<h1>Page des Fruits</h1>

<?php
$pomme1 = new Fruit(Fruit::POMME,150);
$pomme2 = new Fruit(Fruit::POMME,130);
$pomme3 = new Fruit(Fruit::POMME,160);
$cerise1 = new Fruit(Fruit::CERISE,15);
$cerise2 = new Fruit(Fruit::CERISE,10);
$cerise3 = new Fruit(Fruit::CERISE,20);
$cerise4 = new Fruit(Fruit::CERISE,10);

$fruits = [$pomme1,$pomme2,$pomme3,$cerise1,$cerise2,$cerise3,$cerise4];

foreach($fruits as $value){
    echo $value;
    echo "<br/>*****************************************<br/>";
}


?>
















<?php 
    require("common/footer.php");
?>