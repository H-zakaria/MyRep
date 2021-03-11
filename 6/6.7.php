<?php
$notes = array();
$i = 0;
while($i < 9){
    echo "note?";
    $n = readline();
    $notes[$i] = $n;
    $i++;
}
print_r($notes);
echo "moyenne des notes: ".(array_sum($notes)/ count($notes));
?>