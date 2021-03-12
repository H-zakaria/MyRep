<?php 
echo "entrez un nombre entre 10 et 20";
while(true){
    $n = readline();
    if($n >= 10 && $n <= 20){
        echo "great success!";
        break;
    }elseif ($n > 20){
        echo "plus petit!";
    }else{
        echo "plus grand!";
    }
}
?>