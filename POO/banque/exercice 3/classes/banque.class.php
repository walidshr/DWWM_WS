<?php

class Compte{

    protected $somme;
    protected $taux;

    public function __construct($somme)
    {
        $this->somme = $somme;
    }

    public function __construct($taux)
    {
        $this->taux = $taux;
    }

    public function getSomme(){echo "Somme : ".$this->somme."</br>";}
    
    public function setSomme($somme){$this->somme=$somme;}

    public function getTaux(){echo "Taux : ".$this->taux."</br>";}
    
    public function setTaux($taux){$this->taux=$taux;}




// AFFICHAGE DES VALEURS

    public function __destruct()
    {
        $display = $this->getSomme();
        echo $display;
        echo "</br>**************************************</br>";
    }

    public function __destruct()
    {
        $display = $this->getTaux();
        echo $display;
        echo "</br>**************************************</br>";
    }

}
