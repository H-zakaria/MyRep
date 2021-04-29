<?php

include_once "Employe.php";

class Patron extends Employe
{

    public static $CA;
    private $caPerso;
    private $pourcentage;


    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaiss, float $pourcentage, float $ca)
    {

        parent::__construct($matricule, $nom, $prenom, $dateNaiss);
        $this->pourcentage = $pourcentage;
        $this->caPerso = $ca;
        self::$CA += $ca;
    }


    public function getSalaire(): float
    {
        return (self::$CA * $this->pourcentage) / 100;
    }


    /**
     * Get the value of caPerso
     */
    public function getCaPerso()
    {
        return $this->caPerso;
    }

    /**
     * Set the value of caPerso
     *
     * @return  self
     */
    public function setCaPerso($caPerso)
    {
        $this->caPerso = $caPerso;

        return $this;
    }

    /**
     * Get the value of pourcentage
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set the value of pourcentage
     *
     * @return  self
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }
    public function __toString()
    {
        return parent::__toString() . ", emploi: Patron, chiffre d'affaire généré: " . $this->caPerso . "€";
    }
}
