<?php 
echo "entrez les valeurs, s pour stop";

$t = array();
$c = true;
$i = 0;

while(true){
    $in = readline();
    if($in == "s"){
        break;
    }
    $t[$i] = $in;

    if(count($t)>1){
        
        if($t[$i-1] != $t[$i]-1){
            $c = false;
        }
    }
    $i++;
} 
echo ($c == true)? "consecutif" : "non consecutif";

?>