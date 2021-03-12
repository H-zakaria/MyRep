<?php 
echo "nombre de départ";
$n = readline();
$x = 0;
for($i = 1; $i <= $n; $i++){
    $x += $i;
}
echo "result: ".$x;

?>