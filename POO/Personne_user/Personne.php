<?php

class Personne
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;
    private static $currentIdNum = 0;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        self::$currentIdNum++;
        $this->id = self::$currentIdNum;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    public function calculerSalaire(): float
    {
        return 0;
    }
    public function afficher(): void
    {
    }
}
