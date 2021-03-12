<?php 
echo "nombre de notes?\n";
$nbr = readline();
$notes = array();
$i = 0;
while($i < $nbr){
    echo "note?";
    $n = readline();
    $notes[$i] = $n;
    $i++;
}
print_r($notes);
$avg = array_sum($notes)/ count($notes);
echo "moyenne des notes: ".$avg."\n";
$i = 0;
foreach($notes as &$note){
    if ($note > $avg){
        $i++;
    }
}
echo "nombre de notes au dessus de la moyenne: ".$i;
?>