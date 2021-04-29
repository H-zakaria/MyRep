<?php
 include_once ("Personne.php");

 Class Etudiant extends Personne
 {
    private string $cne;

    public function __construct(int $id, string $nom, string $prenom, string $cne)
    {   
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }


    /**
     * Get the value of cne
     */ 
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set the value of cne
     *
     * @return  self
     */ 
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }
    public function __toString()
    {
        return "ID: " . $this->id . ", nom: ". $this->nom .", prenom: " . $this->prenom . ", cne: " . $this->cne . "\n";
    }
 }