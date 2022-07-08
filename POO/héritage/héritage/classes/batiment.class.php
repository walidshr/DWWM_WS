<?php

class Batiment{

    protected $adresse;

    public function __construct($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getAdresse(){echo "Adresse : ".$this->adresse."</br>";}
    
    public function setAdresse($adresse){$this->adresse=$adresse;}

// AFFICHAGE DES VALEURS

    public function __destruct()
    {
        $display = $this->getAdresse();
        echo $display;
        echo "</br>**************************************</br>";
    }
}

