<?php
include_once ("Employe.php");

Class Professeur extends Employe
{
   private string $specialite;

   public function __construct(int $id, string $nom, string $prenom, float  $salaire, string $specialite)
   {   
        parent::__construct($id, $nom, $prenom, $salaire);
       $this->specialite = $specialite;
   }

   /**
    * Get the value of specialite
    */ 
   public function getSpecialite()
   {
      return $this->specialite;
   }

   /**
    * Set the value of specialite
    *
    * @return  self
    */ 
   public function setSpecialite($specialite)
   {
      $this->specialite = $specialite;

      return $this;
   }
   public function __toString()
    {
        return "ID: " . $this->id . ", nom: ". $this->nom .", prenom: " . $this->prenom . ", salaire: " . $this->salaire . "€, specialité: " . $this->specialite . "\n";
    }
}