<?php

abstract Class Personne
{
    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $telephone;
    protected float $salaire;
    public static int $counter;

    public function __construct(int $id, string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    abstract public function calculerSalaire(): float;
}