<?php 
$abc = range('a','z');
$ABC = range('A', 'Z');
$abLen = count($abc);  

echo "faites une phrase: \n";
$phr = readline();
$len = strlen($phr);
$phr2 = "";

for($i = 0; $i < $len; $i++){
    if($phr[$i] != " "){

        if(ctype_upper($phr[$i]{0})){ 
              if($phr[$i] == "Z"){
                  $phr2 .= "A";

              }else{

                for($j = 0; $j < $abLen; $j++){
               
                    if($phr[$i] == $ABC[$j]){
                        $phr2 .= $ABC[$j+1];
                    }
                }

                   }   
            
        }else{
            if($phr[$i] == "z"){
                $phr2 .= "a";

            }else{

              for($j = 0; $j < $abLen; $j++){
             
                  if($phr[$i] == $abc[$j]){
                      $phr2 .= $abc[$j+1];
                  }
              }

                 } 
        }
    }else{
        $phr2 .= $phr[$i];
    }
    
}
$phr = $phr2;

echo $phr;


?>