<?php
    include_once 'connexion_db.php';
    
    if(isset($_POST['noemp'])){
        $incomplet = false;
        if(empty($_POST['nom'])){
            echo "<p> Vous n'avez pas entré le nom </p>";
            $incomplet = true;
        }
        if(empty($_POST['prenom'])){
            echo "<p> Vous n'avez pas entré le prenom </p>";
            $incomplet = true;
        }
        if(empty($_POST['emploi'])){
            echo "<p> Vous n'avez pas entré l'emploi </p>";
            $incomplet = true;
        }
        if(empty($_POST['embauche'])){
            echo "<p> Vous n'avez pas entré la date d'embauche </p>";
            $incomplet = true;
        }   
        if(empty($_POST['sal'])){
            echo "<p> Vous n'avez pas entré le montant du salaire </p>";
            $incomplet = true;
        }
        if(empty($_POST['noserv'])){
            echo "<p> Vous n'avez pas entré le numero de service </p>";
            $incomplet = true;
        }
        if(empty($_POST['noproj'])){
            echo "<p> Vous n'avez pas entré le numero de projet </p>";
            $incomplet = true;
        }
        if($incomplet){
            echo "<br>";
            echo "<a href='../form.php?but=ajouter'><button >FORMULAIRE</button></a>";
            echo "<br>";
            echo "<a href='../tableau-connecte.php'><button>TABLEAU</button></a>";
        }else{

            $sql = "INSERT INTO emp2(noemp, nom, prenom, emploi, sup, embauche, sal, comm, noserv, noproj) VALUES('".$_POST["noemp"]."','".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["emploi"]."','".$_POST["sup"]."','".$_POST["embauche"]."','".$_POST["sal"]."','".$_POST["comm"]."','".$_POST["noserv"]."','".$_POST["noproj"]."' );";
            mysqli_query($conn, $sql);
            header("Location: ../tableau-connecte.php?Enregistrement=succes");
        }
        
    }
    
?> 

