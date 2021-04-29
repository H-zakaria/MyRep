<?php 
include_once "Personne.php";

Class Developpeur extends Personne{
    private string $specialite;

    public function __construct(int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $specialite)
    {
        parent::__construct($id, $nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
    }
    public function afficher() :string
    { 
        return "";
    }

    public function calculerSalaire(): float
    {
        return $this->salaire * 1.2;
    }
}