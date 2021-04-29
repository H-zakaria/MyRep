<?php

class Personne{
private string $nom;
private string $prenom;
private string $dateNaissance;


    public function __construct(string $nom, string $prenom, string $dateNaissance){
        
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setDateNaissance($dateNaissance) :void{ 
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getDateNaissance(){//null ou chaine de carracteres => ?string
        return $this->dateNaissance;
    }
    public function __toString(){
        return $this->nom.", ".$this->prenom.", né le: ".$this->dateNaissance;
    }
    
}



?>