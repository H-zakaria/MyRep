<?php 
echo"combien de valeurs voulez-vous entrer?";
$n = readline();
$t = array();

echo "entrez les valeurs";
for($i = 0; $i < $n; $i++){
    $t[$i] = readline();
}
print_r($t);

$i = 0;
        $plusGrand = 0;
        $indexPlusGrand = 0;
        foreach ($t as &$value) {
              
            } if ($value > $plusGrand) {
                $plusGrand = $value;
                $indexPlusGrand = $i;
                
            }
            $i++;
        }

        echo $max;
//echo "plus grande valeur du tableau: ".max($t); 


?>