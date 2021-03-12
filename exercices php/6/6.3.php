<?php 

$notes = new SplFixedArray(9);
$i = 0;
while($i < 9){
    echo "note?";
    $n = readline();
    $notes[$i] = $n;
    $i++;
}
print_r($notes);

?>