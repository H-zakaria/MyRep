<?php 
echo"combien de valeurs voulez-vous entrer?";
$n = readline();
$t = array();

echo "entrez les valeurs";
for($i = 0; $i < $n; $i++){
    $t[$i] = readline();
}
print_r($t);

foreach($t as &$n){
    $n++;
}
print_r($t);

?>