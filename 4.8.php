<?php 
echo "jour?";
$j = readline();
echo "mois?";
$m = readline();
echo "année?";
$a = readline();

if ($j >= 1 && $j <= 31 && $m >= 1 && $m <=12 ){
    if ($m == 2){
        if($j > 29){
            echo "date invalide";
            
        }
        if($j == 29){
            if(($a % 4 == 0 && $a % 100 != 0) || ($a % 400 == 0)){
                echo "date valide";
            }else{
                echo "date invalide";
            } 
        }
        if ($j < 29){
            echo "date valide";
        }
    }else{
        echo "date valide";
    }
}else{
    echo "date invalide";
}

?>