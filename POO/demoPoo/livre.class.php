<?php 
    class Livres{

        private $nom;
        private $img;
        private $auteur;
        private $prix;

        //constructeur

function __construct($nom, $img, $auteur, $prix){
        $this->nom=$nom;
        $this->img=$img;
        $this->auteur=$auteur;
        $this->prix=$prix;
    }

        //getter

        public function getNom(){return $this->nom;}
        public function getImg(){return $this->img;}
        public function getAuteur(){return $this->auteur;}
        public function getPrix(){return $this->prix;}
 
        //setter

        public function setNom($nom){return $this->nom=$nom;}
        public function setImg($img){return $this->img=$img;}
        public function setAuteur($auteur){return $this->auteur=$auteur;}
        public function setPrix($prix){return $this->prix=$prix;}

        //Méthode pour afficher les informations de l'objet
        
        public function afficherInfo(){
            
        //$this fait référence à l'objet lui même
        //Chacun des objets est capable d'afficher ses informations
        
        echo "<b>Nom du livre : </b>" . $this->nom . "<br/>";
        echo "<b>Auteur du livre :  </b>" . $this->auteur . "<br/>";
        echo "<b>Prix du livre :  </b>" . $this->prix . "€<br/>";
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
