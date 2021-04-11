<?php
    include_once 'includes/connexion_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>details</title>
</head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>No employé</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>emploi</th>
                    <th>No superieur</th>
                    <th>Embauche</th>
                    <th>Salaire</th>
                    <th>Commission</th>
                    <th>No service</th>
                    <th>No projet</th>  
                    <th>Service</th>
                    <th>Ville</th>
                    <th>Projet</th>
                    <th>Budget</th>
                    </tr>
            </thead>
            <tbody>
            <?php
            $noemp =$_GET['noemp'];
            
            $sql = "SELECT e.*, s.*, p.* FROM emp2 e 
                    INNER JOIN services s on e.noserv = s.noserv
                    INNER JOIN proj p on e.noproj = p.noproj
                    WHERE noemp ='$noemp';";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);

            if($resultCheck > 0){
                foreach($datas as $data){  
                    
                    echo "<tr>";
                    echo "<td>".$data['Noemp']."</td>"; 
                    echo "<td>".$data['nom']."</td>"; 
                    echo "<td>".$data['prenom']."</td>"; 
                    echo "<td>".$data['emploi']."</td>"; 
                    echo "<td>".$data['sup']."</td>"; 
                    echo "<td>".$data['embauche']."</td>"; 
                    echo "<td>".$data['sal']."</td>"; 
                    echo "<td>".$data['comm']."</td>"; 
                    echo "<td>".$data['Noserv']."</td>"; 
                    echo "<td>".$data['noproj']."</td>"; 
                    echo "<td>".$data['service']."</td>"; 
                    echo "<td>".$data['ville']."</td>"; 
                    echo "<td>".$data['nomproj']."</td>"; 
                    echo "<td>".$data['budget']."</td>"; 
                    echo "</tr>";
                }
                
            }
            mysqli_free_result($result);

            ?>
            
            
            </tbody>
        </table>
            <a href="tableau-connecte.php"><button>TABLEAU</button></a>
            <br>
            <hr>
            <br>
            <h3>Superieur:</h3>
            <table>
            <thead>
                <tr>
                    <th>Numero employe</th>
                    <th>Nom</th>
                    <th>Service</th>
                    <th>emploi</th>
                    <th>Numero du supérieur</th>
                    <th>Projet en cours</th>
                    </tr>
            </thead>
            <tbody>
            <?php
           
            
            $sql2 = "SELECT sup.noemp, sup.nom, s.service, sup.emploi, sup.sup, proj.nomproj
                    FROM emp2 as sup
                    INNER JOIN emp2 e on e.sup = sup.noemp
                    INNER JOIN services as s on sup.noserv = s.noserv
                    INNER JOIN proj on sup.noproj = proj.noproj
                    WHERE e.noemp ='$noemp';";
            $result2 = mysqli_query($conn, $sql2);
            $datas2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
            
                foreach($datas2 as $data){  
                    
                    echo "<tr>";
                    echo "<td>".$data['noemp']."</td>"; 
                    echo "<td>".$data['nom']."</td>"; 
                    echo "<td>".$data['service']."</td>"; 
                    echo "<td>".$data['emploi']."</td>"; 
                    echo "<td>".$data['sup']."</td>"; 
                    echo "<td>".$data['nomproj']."</td>"; 
                    echo "</tr>";
                }

            
            
            ?>
            </tbody>
            </table>
            
        
    </body>
</html>

                   