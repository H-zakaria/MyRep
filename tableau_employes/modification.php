<?php

    $in = file_get_contents("personnes.txt");
    echo "contenu actuel: ".$in;
    echo "<br>";
    echo "<hr>";
    echo "à modifier:\n ";
    $newLine ="";
    //recuperer la ligne à modifier = $newLine;
    if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"])) {
        $newLine .= $_POST["id"].";".$_POST["nom"].";".$_POST["prenom"].";".$_POST["email"].";".$_POST["telephone"];                        //$newLine =ok;
        echo $newLine."\n";
        echo "<hr>";
        //recuperer la ligne commençant par le même ID / à supprimer = $oldLine;
        $id =$_POST["id"];
        $oldLine ="";
        $line ="";
        $file = fopen("personnes.txt", "r");
        //savoir combien de ligne contient le fichier;
        $nbrOfLines = 0;
        while(!feof($file)){
            if(fgets($file)){
                $nbrOfLines++;
                
            }
        }
        fclose($file);
        $file = fopen("personnes.txt", "r");
        
        echo "nombre de ligne = ".$nbrOfLines;
        echo "<br>";
        echo "<hr>";
        $j = 0;
        while(!feof($file)){
            
            $infos = explode(";", fgets($file));

            $j++;
            if($id == $infos[0]){   
                for($i = 0; $i < count($infos); $i++){

                    if($i == count($infos)-1){
                        $oldLine .= $infos[$i];


                    }elseif($i==0){
                        if($nbrOfLines == 1){

                            $oldLine .= $infos[$i].";";
                        }else{
                            $oldLine .= $infos[$i].";";
                        }
                                           
                        
                    }else{
                        $oldLine .= $infos[$i].";";  
                    } 
                }
                break;    //$oldLine = ok;
                
            }
            

        }
        echo  "ancienne ligne = $oldLine \n";

        // replace oldLine par new;
        $char = "";
        if($nbrOfLines > 1 && $j != $nbrOfLines){
            $char = "\r\n";
        }
        $in = str_replace($oldLine, $newLine.$char, $in);
        echo "<hr>";
        echo "nouveau contenu: \n";
        echo $in;
        


        //mettre dans personnes.txt;

        file_put_contents("personnes.txt", $in);


        fclose($file);

    }
    
    ?>

    <a href="tableau.php"><button>Tableau</button></a>








    
