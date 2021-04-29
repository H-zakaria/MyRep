<?php
include_once "Ouvrier.php";
include_once "Cadre.php";
include_once "Patron.php";

$aa = new Ouvrier(1, "Fredriesh", "Hans", 2530, 1975);

echo $aa."\n";
echo $aa->getSalaire()."€\n";

$Cadre = new Cadre(13, "Cadro", "Almodocrade", 1988, 10);

echo $Cadre."\n";
echo $Cadre->getSalaire()."€\n";

$Patron = new Patron(15, "Don", "Don", 1988, 15, 36000);

echo $Patron."\n";
echo $Patron->getSalaire()."€\n";
