<?php

$abc = range('a', 'z');
$abLen = count($abc);

echo "entrez alphabet clé:";
$t1 = readline();

echo "phrase à crypter:\n ";
$phr = readline();
$len = strlen($phr);
$phr2 = "";

    for($i = 0; $i < $len; $i++){
       
        if($phr[$i] == " "){
            $phr2.= " ";
           

        }else{
           
          for($j = 0; $j < $abLen; $j++){
            if($phr[$i] == $abc[$j]){
               
                $phr2 .= $t1[$j];
            }
        }  
      }
        
    }
    echo $phr2;

?>