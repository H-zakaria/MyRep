<?php 
echo "saisie des scores:\n";
echo "candidat1?";
$c1 = readline();
echo "candidat2?";
$c2 = readline();
echo "candidat3?";
$c3 = readline();
echo "candidat4?";
$c4 = readline();

if ($c2 > 50 || $c3 > 50 || $c4 > 50){
    echo " le candidat 1 a été éliminé au premier tour, 
    un de ses concurrents ayant réunit plus de 50% des voix";
}else if ($c1 < 12.5){
    echo "le candidat 1 a été éliminé au premier tour,
    n'ayant pas réussi à obtenir assez de voix pour se qualifier 
    au second tour";
}else if ($c1 > 50){
    echo "le candidat 1 a gagné dés le premier tour en obtenant
    plus de 50% des suffrages";
}else if ($c1 > $c2 && $c1 > $c3 && $c1 > $c4){
    echo "le candidat 1 passe au second tour en ballottage favorable";    
}else{
    echo "le candidat 1 passe au second tour en ballottage défavorable";
}

?>