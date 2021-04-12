<?php include_once "./includes/connexion_db.php";?>

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
                    <th>Numero du service</th>
                    <th>Designation</th>
                    <th>Ville</th>
                    <th class = "fk">nombres d'employés du service</th>
                    </tr>
            </thead>
            <tbody>
            <?php
            $noemp =$_GET['noserv'];
            
            $sql = "SELECT serv2.*, count(emp2.noemp) as 'nombre_d_employes_du_service' from serv2 
                INNER JOIN emp2 on emp2.noserv = serv2.noserv;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
            print_r($datas);
            if($resultCheck > 0){
                foreach($datas as $data){  
                    
                    echo "<tr>";
                    echo "<td>".$data['Noserv']."</td>"; 
                    echo "<td>".$data['service']."</td>"; 
                    echo "<td>".$data['ville']."</td>"; 
                    echo "<td class = 'fk' >".$data['nombre_d_employes_du_service']."</td>"; 
                    echo "</tr>";
                }
                
            }
            mysqli_free_result($result);

            ?>         
            </tbody>
        </table>
            <a href="tableau-connecte.php"><button>TABLEAU</button></a>   
    </body>
</html>

                   
