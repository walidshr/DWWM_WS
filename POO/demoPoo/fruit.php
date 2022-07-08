<?php
    require_once("fruit.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Page Fruits</h1>

<?php
//construct($nom, $img, $poids, $prix){
//Création d'un personnage

$cherry = new Fruit("Cerise","cherry.png",28,2.5);
$cherry->afficherImage();

$apple = new Fruit("Pomme","apple.png",150,1);
$apple->afficherImage();


?>
<?php 
    require("common/footer.php");
?>