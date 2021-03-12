<?php 
$N = new SplFixedArray(6);
$N[0] = 1;

for ($k = 1; $k < 6; $k++){
    $N[$k] = $N[$k-1] +2;
}
print_r($N);

?>