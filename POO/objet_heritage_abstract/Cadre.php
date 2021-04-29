<?php
include_once "Employe.php";

class Cadre extends Employe
{
    private $indice;


    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaiss, int $indice)
    {

        if ($indice < 1 || $indice > 4) {
            throw new Exception("Indice des cadres doit être entre 1 and 4");
        } else {

            parent::__construct($matricule, $nom, $prenom, $dateNaiss);
            $this->indice = $indice;
        }
    }

    public function getSalaire(): float
    {
        switch ($this->indice) {
            case 1:
                return 13000;
            case 2:
                return 15000;
            case 3:
                return 17000;
            case 4:
                return 20000;
        }
    }

    /**
     * Get the value of indice
     */
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set the value of indice
     *
     * @return  self
     */

    public function setIndice($indice)
    {
        if ($indice < 1 || $indice > 4) {
            throw new Exception("Indice des cadres doit être entre 1 and 4");
        } else {

            $this->indice = $indice;

            return $this;
        }
    }
    public function __toString()
    {
        return parent::__toString() . ", emploi: Cadre, indice: " . $this->indice;
    }
}
