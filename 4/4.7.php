<?php 
$age = 27;
$agePermis = 3;
$accidents = 0;
$ancienneteAgence = 1;
$points = 0;




if($age >= 25){
   $points++;
}
if($agePermis > 2){
    $points++;
}
while($accidents > 0){
    $points--;
    $accidents--;
}
if($ancienneteAgence > 1){
    $points++;
}

switch($points){
    case 0:
        echo "tarif rouge";
        break; 
    case 1:
        echo "tarif orange";
        break;
    case 2:
        echo "tarif vert";
        break;
    case 3:
        echo "tarif bleu";
        break;
    default:
        echo "dossier refusé";
}



?>