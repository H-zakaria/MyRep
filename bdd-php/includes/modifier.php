<?php 
    include_once 'connexion_db.php';
    if(isset($_POST['noemp'])){

        $noemp = $_POST['noemp'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $emploi = $_POST['emploi'];
        $sup = $_POST['sup'];
        $embauche = $_POST['embauche'];
        $sal = $_POST['sal'];
        $comm = $_POST['comm'];
        $noserv = $_POST['noserv'];
        $noproj = $_POST['noproj'];

        $sql = "UPDATE emp2 SET nom = '$nom', prenom = '$prenom', emploi = '$emploi', sup = '$sup', embauche = '$embauche', sal = '$sal', comm = '$comm', noserv = '$noserv', noproj = '$noproj' WHERE noemp = '$noemp';";
        echo $sql;
        mysqli_query($conn, $sql);
        header("Location: ../tableau-connecte.php?Modification=succes");
    }
    

    ?> 
</body>
</html>


