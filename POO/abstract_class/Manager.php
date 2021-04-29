<?php 
include_once "Personne.php";

Class Manager extends Personne{
    private string $service;

    public function __construct(int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $service)
    {
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
    }

    public function afficher() :void
    { 
        
    }

    public function calculerSalaire(): float
    {
        return parent::$salaire * 1.35;
    }
}