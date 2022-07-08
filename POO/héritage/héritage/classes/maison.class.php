<?php


class Maison extends Batiment{

    protected $nbPiece;

    public function __construct($piece, $adresse)
    {
        $this->nbPiece = $piece;
        $this->adresse = $adresse;
    }

    public function getPiece(){echo "Nombre de pièces : ". $this->nbPiece."</br>";}

    public function setPiece($piece){$this->nbPiece = $piece;}

    public function __destruct()
    {
        $display = $this->getPiece() . $this->getAdresse();
        echo $display;
        echo "</br>**************************************</br>";
    }
}
?>