<?php
    require_once("livre.class.php");
    require("common/header.php");
    require("common/menu.php");

?>

<h1>Page Livres</h1>

<?php
// function __construct($nom, $img, $auteur, $prix){
//Création d'un personnage

$cherry = new Livres("Les misérables","miserables.jpg","Victor Hugo",20);
$cherry->afficherImage();

$apple = new Livres("Les fleurs du mal","fleursdumal.jpg","Baudelaire",19);
$apple->afficherImage();


?>
<?php 
    require("common/footer.php");
?>