<?php 
$t1 = range(1, 50);
shuffle($t1);
$t2 = array_slice($t1 ,0,7);
print_r($t2);
$length = count($t2);

$t1 = array($length);
$j = 0;
for($i = $length-1; $i >= 0; $i--){
    $t1[$j] = $t2[$i];
    $j++;
}
$t2 = $t1;
print_r($t2);
?>