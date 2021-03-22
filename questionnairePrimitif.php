<?php 
$op = 0;
while($op != 5){

    echo "quelle opperation voulez-vous effectuer? repondre avec chiffre \n";
    echo "1- ajouter une personne \n";  
    echo "2- rechercher une personne \n";
    echo "3- supprimer une personne du registre \n";
    echo "4- afficher les contacts \n";
    echo "5- pour arreter le programme \n";
    $op = readline();
    $infos = array("prenom","nom","mail","telephone");
    switch($op){
        case 1:  /*creer un fichier si aucun, et append */
            $person = "";
            foreach($infos as $info){
                if($info == "telephone"){
                echo $info."? \n ";
                $person .= readline()."\n";
                }else{
                echo $info."? \n ";
                $person .= readline().';';   
                }
                
            }
            $file = fopen("agenda.txt", "a")or die("ouverture/creation impossible");
            fwrite($file, $person);
            fclose($file);
            break;

        case 2: /*read- find -print*/
            echo "qui recherchez-vous?";
            $nom = readline();
            $found = false;
            $file = fopen("agenda.txt", "r")or die("lecture impossible");
            while(!feof($file)){
             $look = explode(";", fgets($file));
             if($look[1] == $nom){
                 echo "prenom: ".$look[0]."\n";
                 echo "nom: ".$look[1]."\n";
                 echo "mail: ".$look[2]."\n";
                 echo "telephone: ".$look[3]."\n";
                 $found = true;                
                 break;
             }   
            }
            fclose($file);
            if($found == false){"pas dans l'agenda";}
            break;
        
        case 3: /*effacer une ligne: enregistrer toutes les lignes sauf celle à effacer dasn une variable, effacer le contenu du fichier et remplacer par le contenu de la variable*/
            echo "nom du contact à supprimer: ";
            $nom = readline();
            $file = "agenda.txt";
            $done = false;
            $line = "";
            $reader = fopen($file, "r") or die("couldnt open");

            while(!feof($reader)){
                $parts = explode(";", fgets($reader));
                if($parts[1] == $nom){
                    foreach($parts as $part) {  
                        if($part == $parts[count($parts) -1]){
                           $line .= $part; 
                        }else{
                           $line .= $part.';';  
                        }
                    }   
                      echo $line."\n";            
                      break;  
                }
                    
                 
            }    

            $contents = file_get_contents($file);
            //echo $contents."\n";
            $contents = str_replace($line, '', $contents);
            file_put_contents($file, $contents);
            
            break;

        case 4:  /*read- find -print*/
            $reader = fopen("agenda.txt", "r")or die("lecture impossible");
            while(!feof($reader)){
                $look = explode(";", fgets($reader));

                if(count($look) == 4){
                    echo "prenom: ".$look[0]."\n";
                    echo "nom: ".$look[1]."\n";
                    echo "mail: ".$look[2]."\n";
                    echo "telephone: ".$look[3]."\n";
                }     
                 
            }
            fclose($reader);
            break;

    }
}


?>