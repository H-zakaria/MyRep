
<?php
echo "quel âge as-tu?";
$a = readline();

if ($a >= 12){
    echo "Cadet";
}elseif($a >= 10){
    echo "Minime";
}elseif($a >= 8){
    echo "Pupille";
}elseif($a >= 6){
    echo "Poussin";
}

?> 
