<?php
include_once "Personne.php";

class Utilisateur extends Personne
{
    private $login;
    private $psw;
    private $service;
    private $userList = array();


    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $login, string $psw, string $service)
    {
        parent::__construct($nom,  $prenom,  $mail,  $telephone,  $salaire);
        $this->login = $login;
        $this->psw = $psw;
        $this->service = $service;
        $this->userList = array(
            $this->id => array('nom' => $nom, 'prenom' => $prenom, 'mail' => $mail, 'telephone' => $telephone, 'salaire' => $salaire, 'login' => $login, 'psw' => $psw, 'service' => $service)
        );
    }

    public function calculerSalaire(): float
    {
        return 0;
    }
    public function afficher(): void
    {
    }

    public static function printUserList()
    {
        print_r(self::userList);
    }
}
