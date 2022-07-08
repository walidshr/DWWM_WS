<?php 
    class Personnage{

        public $nom = "Luke";
        public $img = "player.png";
        public $age = 27;
        public $sexe = true;
        public $force = 5;
        public $agilite = 4;

        // public $nom;
        // public $img;
        // public $age;
        // public $sexe;
        // public $force;
        // public $agilite;





         //Méthode pour afficher les informations de l'objet
         public function afficherInfo(){
            //$this fait référence à l'objet lui même
            //Chacun des objets est capable d'afficher ses informations
            echo "<b>Nom : </b>" . $this->nom . "<br/>";
            echo "<b>Age :  </b>" . $this->age . "<br/>";

            //Si c'est vrai on affiche la valeur homme sinon la valeur femme
            if($this->sexe){
                echo "Homme <br/>";
            }else{
                echo "Femme <br/>";
            }
            echo "<b>Force :  </b>" . $this->force . "<br/>";
            echo "<b>Agilite :  </b>" . $this->agilite . "<br/>";
        }

        //Méthode pour afficher les images
        public function afficherImage(){
            echo "<div class='gauche'>";
                echo "<img src = 'sources/images/". $this->img ." 'alt='".$this->img ."' />";
            echo "</div>";
            echo "<div class='gauche'>";
                //Pour appeler une fonction dans une fonction
                $this->afficherInfo();
            echo "</div>";
            echo "<div class='clearB'></div>";

        }



    }


    require("common/header.php");
    require("common/menu.php");
   
?>
<h1>Page Personnages</h1>

<?php
//Création d'un personnage
$p1 = new Personnage("Luke","player.png",27,true,5,4);
$p1->afficherImage();

//Affichage des informations
echo "Nom : ". $p1->nom;


?>
<?php 
    require("common/footer.php");
?>