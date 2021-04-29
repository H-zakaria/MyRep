<?php 
include("Personne.php");

$personnes = [
$personne1 = new Personne("Lannister","Tywin", "21/08/1987"),
$personne2 = new Personne("Greyjoy", "Euron", "21/08/1990"),
$personne3 = new Personne("Dupuis","Jean-Pierre", "21/08/1987")
                                                                ];

foreach($personnes as $personne){
    echo $personne->getNom()."\n";
    echo $personne->getPrenom()."\n";
    echo $personne->getDateNaissance()."\n";
}
    $personne1->setPrenom("Tyrion");
    echo $personne1->getPrenom()."\n";

    var_dump($personne3);

    echo $personne2;

?>