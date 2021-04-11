<?php
    include_once 'connexion_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<?php
$noemp = $_GET['noemp'];
$sql = "DELETE FROM emp2 WHERE noemp = '$noemp';";
mysqli_query($conn, $sql);
header("Location: ../tableau-connecte.php?suppression=succes");

?>
</body>
</html>