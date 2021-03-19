<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Suppression</title>
</head>
 <?php
 $thisID =  $_GET['id'];
 
 $file = fopen("personnes.txt", "r");
 $toKill ="";
 while (!feof($file)) {
     $ligne = fgets($file);
     $infos = explode(";", $ligne);
     if($thisID == $infos[0]){   
         
       for($i =0; $i < count($infos); $i++){
            if($i == count($infos)-1){
                $toKill .= $infos[$i];
            }else{
                $toKill .= $infos[$i].";";
            }
       }
       break;    
     }
 }
 fclose($file);

 $all = file_get_contents("personnes.txt");

 $all = str_replace($toKill,"",$all);

 file_put_contents("personnes.txt", $all);

 $all = file_get_contents("personnes.txt");
 $all = explode("\n", $all);
 echo "<br>";
 echo "<hr>";

 print_r($all);

 echo "<br>";
 echo "<hr>";
 unset($all[count($all)-1]);
 print_r($all);
 
 $file = fopen("personnes.txt","a");
 for($i = 0; $i < count($all); $i++){
     if($all[$i] != ""){
         if($i == 0){
        file_put_contents("personnes.txt", $all[$i]);
        echo "apres file put contents";
        echo "<br>";
        echo "<hr>";
        print_r($all); 
        }else{
        fwrite($file,"\n".$all[$i]);    
     }
     }
     
    
 }
 fclose($file);

echo file_get_contents("personnes.txt");


 ?>

<a href="tableau.php"><button>Tableau</button></a>