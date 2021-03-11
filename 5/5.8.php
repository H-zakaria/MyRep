<?php 
$i = 1;
$max = 0;
$pos = 0;
$n = 1;
while($n != 0){
    echo "Entrez le nombre numéro ".$i. ": ";
    $n = readline();
    if ($n > $max){
        $max = $n;
        $pos = $i;
    }
    $i++;
}
echo "Le plus grand de ces nombres est: ".$max."\n";
echo "C'était le numero ".$pos;


?>