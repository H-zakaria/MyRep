<?php
include_once "Utilisateur.php";

class Profil
{
    private $id;
    private $code;
    private $libelle;
    public static $lastId = 0;

    public function __construct(string $code, string $libelle)
    {
        self::$lastId++;
        $this->id = self::$lastId;
        $this->code = $code;
        $this->libelle = $libelle;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
