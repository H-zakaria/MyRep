<?php 
$t1 = array(4,8,7,9,1,5,4,6);
$t2 = array(7,6,5,2,1,3,7,4);

/*                          fait bugger le terminal
$c1 = count($t1);
$c2 = count($t2);
$stroumpf = 0;

for ($i = 0; i < $c1; $i++){

    for($j = 0; $j < $c2; $j++){
        $stroumpf += $t1[$i] * $t2[$j]; 
    }
}
echo "result: ".$stroumpf;

*/
$x = array_sum($t1) * array_sum($t2);
echo "result: ".$x;

?>
