<?php 
$t1 = range(1, 50);
shuffle($t1);
$t2 = array_slice($t1 ,0,7);
print_r($t2);
$length = count($t2);
$t1 = array();
echo "indice de la valeur à effacer?";
$in = readline();
/*
$j = 0;
for($i = 0; $i < $length; $i++){
    if($i != $in){
        $t1[$j] = $t2[$i];
        $j++;
    }
}
$t2 = $t1;
print_r($t2);

*/

unset($t2[$in]);
print_r($t2);

?>