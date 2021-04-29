<?php
include_once "Employe.php";

class Ouvrier extends Employe
{
    private $anneeEmbauche;
    private static $SMIC = 2500;
    private static $maxSal = 5000;



    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaiss, int $anneeEmbauche)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaiss);
        $this->anneeEmbauche = $anneeEmbauche;
    }
    public function getSalaire(): float
    {
        $sal = self::$SMIC + (date("Y") - $this->anneeEmbauche) * 100;
        if ($sal > self::$maxSal) {
            return self::$maxSal;
        } else {
            return $sal;
        }
    }


    /**
     * Get the value of anneeEmbauche
     */
    public function getAnneeEmbauche()
    {
        return $this->anneeEmbauche;
    }

    /**
     * Set the value of anneeEmbauche
     *
     * @return  self
     */
    public function setAnneeEmbauche($anneeEmbauche)
    {
        $this->anneeEmbauche = $anneeEmbauche;

        return $this;
    }


    public function __toString()
    {
        return parent::__toString() . ", emploi: Ouvrier, année d'embauche: " . $this->anneeEmbauche;
    }
}
