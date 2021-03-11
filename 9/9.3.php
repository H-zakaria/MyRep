<?php 
echo "faites une phrase: ";
$in = readline();
$response = str_word_count($in);
echo $response."\n";
$c = 0; 
$len = strlen($in);
for($i = 0; $i < $len; $i++){
    if($in[$i] == " "){
        $c++;
    }
}
echo ($c+1);

?>