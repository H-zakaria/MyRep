<?php 
echo "faites une phrase: ";
$in = readline();
$voyelles = array('a','e','i','o','u');
$len = strlen($in);
$vlen = count($voyelles);
$c = 0;
for ($i = 0; $i < $len; $i++){
    for ($j = 0; $j < $vlen; $j++){
        if($in[$i] == $voyelles[$j]){
            $c++;
        }
    }
}
echo $c." voyelles dans la phrase"; 

?>