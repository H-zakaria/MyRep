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
    <title>php-bdd</title>
</head>
<!-- $bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "root", "", "gestion_employes");
$result = mysqli_query($bdd, "DELETE FROM emp WHERE noemp = 1615;");
var_dump($result);

// $donnees = mysqli_fetch_all($result, MYSQLI_ASSOC);



// exercice :

/** -->
 <!-- * - Utiliser la BDD gestion_employes
 * - Afficher les employes dans un tableau HTML(BOOTSTRAP): nom, prenom, emploi, superieur, service
 * - Pour chaque ligne du tableau : boutton detail, modifier, supprimer
 * - En haut du tableau, un bouton pou' l'ajout d'un nouvel employé
 * - Même chose pour les services
 */ -->
<body>   
    <div>
    <a href='form.php?but=ajouter'><button class='btn btn-warning'>ajouter</button></a>
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
                    <th></th>
                    <th></th>
                    <th></th>
                    

                </tr>
            </thead>
            <tbody>
            <?php //fermer apres
            // $bdd = mysqli_init();
            // mysqli_real_connect($bdd, "localhost", "zak", "mdp", "gestion");
            // $result = mysqli_query($bdd, "select * FROM emp2;");
            // $data = mysqli_fetch_all($result, MYSQLI_NUM);

            $sql = "SELECT * FROM emp2;";
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
                    echo "<td><a href='details.php?noemp=$data[Noemp]'><button class='btn btn-warning'>details</button></a></td>";
                    echo "<td><a href='form.php?noemp=$data[Noemp]&but=modifier'><button class='btn btn-warning'>Modifier</button></a></td>";
                    echo "<td><a href='includes/supr.php?noemp=$data[Noemp]'><button class='btn btn-warning'>supprimer</button></a></td>";
                    echo "</tr>";
                }
            }else{
                echo "La base de donnée est vide";
            }

            
            ?>
            
            </tbody>
        </table>
        </div>
</body>
</html>