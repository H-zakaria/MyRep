<?php 
include_once("Etudiant.php");
include_once("Professeur.php");
$etud1 = new Etudiant(1, "Baratheon", "Stanis", 1565);
$etud2 = new Etudiant(2, "Geyjoy", "Euron", 1566); 

$emp1 = new Employe(3, "Lannister", "Kevan", 1802.59);
$emp2 = new Employe(4, "Lannister", "Cercei", 2050.23);

$prof1 = new Professeur(5, "Mestre", "Lewyn", 1400.57, "Lettres anciennes");
$prof2 = new Professeur(6, "Mestre", "Adala", 3000.57, "Mathématiques");

echo "Liste des étudiants: "."\n";
echo $etud1;
echo $etud2;
echo "Liste des employés: "."\n";
echo $emp1."\n";
echo $emp2."\n";
echo "Liste des professeurs: "."\n";
echo $prof1;
echo $prof2;
