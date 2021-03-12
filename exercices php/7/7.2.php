<?php 
$t1 = range(1, 50);
shuffle($t1);
$t2 = array_slice($t1 ,0,25);
print_r($t2);


$length = count($t2);
// insertion

 for($i = 1; $i < $length; $i++){
    $x = $t2[$i];
    $y = $i;
    while($y > 0 && $t2[$y -1] < $x){
        $t2[$y] = $t2[$y-1];
        $y = $y-1;   
         
    }
    $t2[$y] = $x; 
}

print_r($t2);
/*
// bulle

        
    for($i = 0; $i < $length -1; $i++){
        for($j = 0; $j < $length-1; $j++){
        
          if($t2[$j] < $t2[$j+1]){
        echo "here";
            $x = $t2[$j+1];
            $t2[$j+1] = $t2[$j];
            $t2[$j] = $x;

        }    
    }
    }
    
    print_r($t2);
*/


?>  