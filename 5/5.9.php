<?php 
echo "entrez prix articles";
$sum = 0;
while(true){
    $p = readline();
    if($p == 0){
        break;
    }
    $sum += $p;
}
echo "somme: ".$sum."\n";
$paiement = readline();
echo "argent reçu: ".$paiement."\n";
$surplus = $paiement - $sum;
$reste = $surplus % 10;
$dix = ($surplus  - $reste)/10;
if($reste >= 5){
    $cinq = 1;
    $un = $reste -5;
}else{
    $cinq = 0;
    $un = $reste;
}
echo "monaie à rendre: ".$surplus."\n";
echo $dix." billets de 10€, ".$cinq." billets de 5€ et ".$un." pieces de 1€"; 
     
?>