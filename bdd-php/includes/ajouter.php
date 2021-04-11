<?php
    include_once 'connexion_db.php';
    
    $sql = "INSERT INTO emp2(noemp, nom, prenom, emploi, sup, embauche, sal, comm, noserv, noproj) VALUES('".$_POST["noemp"]."','".$_POST["nom"]."','".$_POST["prenom"]."','".$_POST["emploi"]."','".$_POST["sup"]."','".$_POST["embauche"]."','".$_POST["sal"]."','".$_POST["comm"]."','".$_POST["noserv"]."','".$_POST["noproj"]."' );";
    mysqli_query($conn, $sql);
    header("Location: ../tableau-connecte.php?Enregistrement=succes");
?> 

