<?php 
$nb = new SplFixedArray(5);

for($i = 0; $i < 5; $i++){
    $nb[$i] = $i * $i;
}
for($i = 0; $i < 5; $i++){
   echo $nb[$i]." ";
}
// print_r($nb);
?>