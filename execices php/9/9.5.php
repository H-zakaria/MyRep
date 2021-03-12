<?php 
echo "faites une phrase: \n";
$phr = readline();
$len = strlen($phr);
echo "suprimer caractere numero?\n ";
$car = readline();
if($car <= $len && $car >= 0){
    $phr2 = "";
    $j = 0;
    for($i = 0; $i < $len; $i++){
        if($i != $car){
            $phr2 .= $phr[$i];
            
        }
    }
    $phr = $phr2;
    
    echo $phr;
}else{
    echo "numero invalide";
}


?>