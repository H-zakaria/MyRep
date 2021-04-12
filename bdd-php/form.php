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
    <title>formulaire d'ajout/modification</title>
</head>
<body>
    <?php
    if($_GET['but'] == 'ajouter'){ 
    ?>
    </div>
        <form class="formu" action="includes/ajouter.php" target="tableau-connecte.php" method="POST">
        <input type="number" name="noemp" placeholder="Entrez le noemp">
        <input type="text" name="nom" placeholder="Entrez le nom">
        <input type="text" name="prenom" placeholder="Entrez le prenom">
        <input type="text" name="emploi" placeholder="Entrez l'emploi'">
        <input type="number" name="sup" placeholder="Numero du suprérieur">
        <input type="date" name="embauche" placeholder="Entrez la date d'embauche">
        <input type="number" step="any" name="sal" placeholder="Entrez le salaire">
        <input type="number" step="any" name="comm" placeholder="Entrez la commission">
        <label for="noserv">Service:  </label>
        <select id="noserv" name="noserv">
            <option value="" selected hidden value="">Selectionner</option>
            <option value="1">1- DIRECTION</option>
            <option value="2">2- LOGISTIQUE</option>
            <option value="3">3- VENTES</option>
            <option value="4">4- FORMATION</option>
            <option value="5">5- INFORMATIQUE</option>
            <option value="6">6- COMPTABILITE</option>
            <option value="7">7- TECHNIQUE</option>
        </select>
        <input type="number" name="noproj" placeholder="Entrez le numero projet">
        <input type="submit" value="Soumettre">
        </form>
        <a href="tableau-connecte.php"><button>TABLEAU</button></a>
    </div>
    <?php
    }else if($_GET["but"] == 'modifier')
    {
        $sql = "SELECT * FROM emp2 WHERE noemp = $_GET[noemp];";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        $datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
            if($resultCheck > 0)
            {

    ?>
            <div>
                <form class="formu" action="includes/modifier.php" target="tableau-connecte.php" method="POST">
                    <input type="number"  name="noemp"  value=<?php echo $datas[0]['Noemp'];?> placeholder="Entrez le noemp">
                    <input type="text"  name="nom" value=<?php echo $datas[0]['nom'];?> placeholder="Entrez le nom">
                    <input type="text"  name="prenom" value=<?php echo $datas[0]['prenom'];?> placeholder="Entrez le prenom">
                    <input type="text"  name="emploi" value=<?php echo $datas[0]['emploi'];?> placeholder="Entrez l'emploi'">
                    <input type="number"  name="sup" value=<?php echo $datas[0]['sup'];?> placeholder="Numero du suprérieur">
                    <input type="date" c name="embauche" value=<?php echo $datas[0]['embauche'];?> placeholder="Entrez la date d'embauche">
                    <input type="number" step="any" name="sal" value=<?php echo $datas[0]['sal'];?> placeholder="Entrez le salaire">
                    <input type="number" step="any" name="comm" value=<?php echo $datas[0]['comm'];?> placeholder="Entrez la commission">
                    <input type="number"  name="noserv" value=<?php echo $datas[0]['Noserv'];?> placeholder="Entrez le numero de service">
                    <input type="number"  name="noproj" value=<?php echo $datas[0]['noproj'];?> placeholder="Entrez le numero projet">
                    <input type="submit"  value="Soumettre">    
                </form>
                <a href="tableau-connecte.php"><button>TABLEAU</button></a>
            </div>
    <?php     
            }       
    }else
    {
        echo "l'employé n'existe pas.";
    }
    ?>
    
    
    
    
</body>
</html>