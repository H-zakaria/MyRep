<?php 
echo "nombre de départ?";
$n = readline();
$x = 1;
for($i = 1;$i <= $n; $i++){
    $x = $x *$i;
}
echo $x;
?>