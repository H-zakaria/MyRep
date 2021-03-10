<?php 
echo "quel age ?";
$a = readline();
echo "Homme / Femme?";
$s = readline();



if($s == "homme" || $s == "Homme"){
    if($a > 20){
        echo "imposable";
    }else{
        echo "non imposable";
    }
}else{
    if($a >= 18 && $a <= 35){
        echo "imposable";
    }else{
        echo "non imposable";
    } 
}

?>