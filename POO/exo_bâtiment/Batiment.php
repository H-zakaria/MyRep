<?php

Class Batiment
{
    private $adresse;
    private $superficie;
    
    public function __construct(string $adresse)
    {
        $this->adresse = $adresse;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $nouvelleAdresse): void
    {
        $this->adresse = $nouvelleAdresse;
      
    }

    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    public function setSuperficie(?int $nouvelleSuperficie): void
    {
        $this->superficie = $nouvelleSuperficie;
        
    }


    public function __toString()
    {
        if($this->superficie != null)
        {
            return "Adresse: " . $this->adresse . ", Superficie : " . $this->superficie . "m²" . "\n";
        }
        else
        {
            return "Adresse: " . $this->adresse ."\n";
        }

        
    }
}

