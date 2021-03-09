<?php
echo "entrez 2 nombres";
$n1 = readline();
$n2 = readline();

if($n1 == 0 || $n2 == 0){
    echo "produit nul";
}else if (($n1 < 0 && $n2 < 0)||($n1 > 0 && $n2 > 0)){
    echo "produit positif";
}else if (($n1 < 0 && $n2 > 0)||($n1 > 0 && $n2 < 0)){
    echo "produit negatif";
}

?>