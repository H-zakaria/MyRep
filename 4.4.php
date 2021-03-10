<?php 
echo "combien de photocopies avez-vous effectué?";
$n = readline();

if ($n > 30){
    $p = ($n - 30) * 0.08 + 2.8;
}elseif($n > 10){
    $p = ($n - 10) * 0.09 + 1; 
}else{
    $p = $n * 0.10;
}
echo "prix: ".$p."€";

?>