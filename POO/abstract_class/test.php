<?php
include_once "Developpeur.php";
include_once "Manager.php";

$dev1 = new Developpeur(1, "Lannister", "Tyrion", "tyrion@lannister.mail","0687596812", 1752.60, "mysql");
$dev2 = new Developpeur(2, "Lannister", "Jaime", "jaime@lannister.mail","0649597712", 1000, "php");

$mng1 = new Manager(3, "Lannister", "Tywin", "tywin@lannister.mail","0649324968", 3000, "Informatique");
$mng1 = new Manager(3, "Lannister", "Cercei", "cercei@lannister.mail","0611336655", 2501, "Logistique");


// $p = new Personne(1, "Lannister", "Tyrion", "tyrion@lannister.mail","0687596812", 1752.60);
//  -> cannot instanciate;

echo $dev2->calculerSalaire();