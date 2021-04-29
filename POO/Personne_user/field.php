<?php
include_once "Profil.php";
include_once "Utilisateur.php";

$ChefP = new Profil('CP', 'Chef_de_Projet');
$Manager = new Profil('MN', 'Manager');
$directeurDeProjet = new Profil('DP', 'directeur_de_projet');
$drh = new Profil('DRH', 'Directeur_Ressources_Humaines');
$directeurGeneral = new Profil('DG', 'Directeur_General');

echo Profil::$lastId;

$user1 = new Utilisateur('Stark', 'Ned', 'ned.stark@mail', '0657849721', 15300, 'ned', 'mdp', 'ventes');
$user2 = new Utilisateur('Stark', 'Arya', 'ned.stark@mail', '0657849721', 15300, 'ned', 'mdp', 'ventes');

print_r(Utilisateur::getUserList());
