<?php 
$t1 = array(4,8,7,9,1,5,4,6);
$t2 = array(7,6,5,2,1,3,7,4);
$t3 = array();

$c1 = count($t1);
$c2 = count($t2);
$maxSize = 0;

if($c1 > $c2){
    $maxSize = $c1;
}elseif($c2 > $c1){
    $maxSize = $c2;
}else{
    $maxSize = $c1;
}
for($i = 0; $i < $maxSize; $i++){
    $t3[$i] = $t1[$i] + $t2[$i];
}
print_r($t3);

// or

$t3 = array_map(function () {
    return array_sum(func_get_args());
}, $t1, $t2);

print_r($t3);
?>