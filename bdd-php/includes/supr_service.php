<?php
    include_once 'connexion_db.php';

$noserv = $_GET['noserv'];
$sql = "DELETE FROM serv2 WHERE Noserv = '$noserv';";
mysqli_query($conn, $sql);
header("Location: ../tableau-connecte.php?suppression=succes");
?>