<?php
echo "Entrez un nombre";
$n = readline();
if($n == 0){
    echo " = 0";
}
else if($n > 0){
    echo "positif";
}else{
    echo "negatif";
}

?>