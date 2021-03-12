<?php 
$abc = range('a','z');
$ABC = range('A', 'Z');
$abLen = count($abc);  

echo "faites une phrase: \n";
$phr = readline();
echo "avec quel décalage crypter: \n";
$dec = readline();
$len = strlen($phr);
$phr2 = "";
$position = 0;

for($i = 0; $i < $len; $i++){
    
    if($phr[$i] != " "){
       

        if(ctype_upper($phr[$i]{0})){ 
            
                for($j = 0; $j < $abLen; $j++){
                    
                    if($phr[$i] == $ABC[$j]){
                        $position = $j;
                        
                        if($position + $dec > $abLen){
                          $p = ($position + $dec) - $abLen;
                          $phr2 .= $ABC[$p];
                        }else{
                          $phr2 .= $ABC[$position + $dec]; 
                        }
                    }
                }

                    
            
        }else{
            

              for($j = 0; $j < $abLen; $j++){
             
                  if($phr[$i] == $abc[$j]){
                      $position = $j;
                      
                      if($position + $dec > $abLen){
                        $p = ($position + $dec) - $abLen;
                        $phr2 .= $abc[$p];
                      }else{
                        $phr2 .= $abc[$position + $dec]; 
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