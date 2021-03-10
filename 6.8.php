<?php 
echo"combien de valeurs voulez-vous entrer?";
$n = readline();
$t = array();
$p = 0;
echo "entrez les valeurs";
for($i = 0; $i < $n; $i++){
    $t[$i] = readline();
    if($t[$i] > 0){
        $p++;
    }
}
print_r($t);
echo "nombre(s) positifs: ".$p."\n";
echo "nombre(s) négatifs: ".(count($t) - $p);

?>