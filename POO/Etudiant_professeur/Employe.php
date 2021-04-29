<?php
 include_once ("Personne.php");

 Class Employe extends Personne
 {
    protected float $salaire;

    public function __construct(int $id, string $nom, string $prenom, float $salaire)
    {   
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }
    public function __toString()
    {
        return "ID: " . $this->id . ", nom: ". $this->nom .", prenom: " . $this->prenom . ", salaire: " . $this->salaire . "€";
    }
}