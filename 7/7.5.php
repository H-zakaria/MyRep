<?php 
$dictionaire = array(
    array("patate", "tubercule commestible"),
    array("pustuleux", "qui pustule"),
    array("pentalon", "vêtement")
);
$l = count($dictionaire);
echo "mot recherché? ";
$in = readline();
$found = false;
for($i = 0; $i < $l; $i++){
   
    if($in == $dictionaire[$i][0]){
        
        echo $dictionaire[$i][0]." definition: ".$dictionaire[$i][1];  
        $found = true;
    }
}
if($found == false){
    echo "mauvaise orthographe ou mot inconnu";
}

?>

