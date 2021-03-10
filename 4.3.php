<?php 
echo "quelle heure est-il?";
$h = readline();
$m = readline();
$s = readline();

if($s == 59){
    if($m == 59){

        if($h == 23){
            echo "dans une seconde il sera 00 heures, 00 minutes et 00 secondes";
        }else{
            echo "dans une seconde il sera ".($h+1)." heures, 00 minutes et 00 secondes";
        }
    }else{
        echo " dans une seconde il sera ".$h. " heures, ".($m+1)." minutes et 00 secondes"; 
    }
}else{
    echo " dans une seconde il sera ".$h. " heures, ".$m. " minutes et ".($s+1)." secondes"; 
}


?>