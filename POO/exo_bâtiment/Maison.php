<?php
include_once ("Batiment.php");

class Maison extends Batiment
{
    private int $nbPieces;

    
    public function __construct(string $adresse, float $superficie, int $nbPieces)
    {
        $this->adresse = $adresse;
        $this->superficie = $superficie;
        $this->nbPieces = $nbPieces;
    }

    public function getNbPieces(): ?int
    {
        return $this->nbPieces;
    }

    public function setNbPieces(?int $nvxNbPieces): void
    {
        $this->nbPieces = $nvxNbPieces;
       
    }

    public function __toString()
    {
        
        return parent::__toString()."Nombre de pieces de la maison: " . $this->nbPieces . "\n";
        
    }
}