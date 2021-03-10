<?php 
$Suite = array();

array_push($Suite,"1","1");
for($i = 2; $i < 7; $i++){
    $Suite[$i] = $Suite[$i-1] + $Suite[$i-2];
}
print_r($Suite);
//fibbonacci?

?>