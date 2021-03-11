<?php 
echo "quelle heure est-il?";
$h = readline();
$m = readline();

if ($m == 59){
    if ($h != 23){
        echo "dans une minute il sera ".($h+1) ." heure(s) 00";   
    }else{
        echo " dans une minute il sera  00 heure(s) 00 "; 
    }
    
}else{
    echo "dans une minute, il sera ".$h. "heure(s) ".($m+1);
}

?>