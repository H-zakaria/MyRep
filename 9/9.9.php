<?php
$abc = range('a', 'z');
$abLen = count($abc);
echo "entrez la clef(vigenere)\n";
$clef = readline();
$max = strlen($clef) -1;
$c = 0;
echo "entrez la phrase à crypter:\n  ";
$phr = readline();
$sLen = strlen($phr);
$crypte = "";
$posLettre = 0;
$posClef = 0;


    for($i = 0; $i < $sLen; $i++){
        if($phr[$i] != " "){ 
            for($j = 0; $j < $abLen; $j++){   // trouver la position de la lettre dans l'abc;
                if($phr[$i] == $abc[$j]){
                    $posLettre = $j;
                    echo $phr[$i]." ".$j."\n";   
                }
            }
            for($j = 0; $j < $abLen; $j++){ // trouver position de la clef dans l'aphabet;
                if($clef[$c] == $abc[$j]){
                    $posClef = $j;
                    echo "position lettre clef: ".$j."\n"; 
                    $c++;
                    if($c > $max){              // reinitialiser la clef;
                        $c = 0;
                    }
                }    
            }
            if ($posClef + $posLettre > $abLen){  // voir si positions cumulées excedent 26 pour connaître position finale;
                $pos = ($posClef + $posLettre) - $abLen;
                echo "position finale = ".$pos."\n";
            }else{
                $pos = $posClef + $posLettre;
                echo "position finale = ".$pos."\n";
            }
            $crypte .= $abc[$pos];

        }else{
            $crypte .= " ";
        }
    }
    echo $crypte;
 ?>