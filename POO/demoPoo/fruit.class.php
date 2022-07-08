<?php 
    class Fruit{

        private $nom;
        private $img;
        private $poids;
        private $prix;

        //constructeur

function __construct($nom, $img, $poids, $prix){
        $this->nom=$nom;
        $this->img=$img;
        $this->poids=$poids;
        $this->prix=$prix;
    }

        //getter

        public function getNom(){return $this->nom;}
        public function getImg(){return $this->img;}
        public function getPoids(){return $this->poids;}
        public function getPrix(){return $this->prix;}
 
        //setter

        public function setNom($nom){return $this->nom=$nom;}
        public function setImg($img){return $this->img=$img;}
        public function setPoids($poids){return $this->poids=$poids;}
        public function setPrix($prix){return $this->prix=$prix;}

        //Méthode pour afficher les informations de l'objet
        
        public function afficherInfo(){
            
        //$this fait référence à l'objet lui même
        //Chacun des objets est capable d'afficher ses informations
        
        echo "<b>Nom : </b>" . $this->nom . "<br/>";
        echo "<b>Poids disponible en stock :  </b>" . $this->poids . "<br/>";
        echo "<b>Prix (pour 1 kilo) :  </b>" . $this->prix . "€<br/>";
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

   
?>
