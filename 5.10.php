<?php 
echo "nombre de chevaux partants?";
$nbrPart = readline();
echo "nombre de chevaux joués?";
$nbrJoues = readline();

//chances dans l'ordre
$n = 1;
for($i = 1; $i <= $nbrPart; $i++){
   $n *= $i; 
}
$nmp = $nbrPart - $nbrJoues;
$n2 = 1;
for($i = 1; $i <= $nmp; $i++){
   $n2 *= $i; 
}
$chancesOrdre = $n/$n2;
echo "chances dans l'ordre: ".$chancesOrdre."\n";

//desordre
$p = 1;
for($i = 1; $i <= $nbrJoues; $i++){
   $p *= $i; 
}
$chancesDesordre = $n/($p * $n2);

echo "chances dans le désordre: ".$chancesDesordre;



?>