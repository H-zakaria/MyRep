<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Suppression</title>
</head>
 <?php
 $thisID =  $_GET['id'];
 
 $file = fopen("personnes.txt", "r");
 while (!feof($file)) {
     $ligne = fgets($file);
     $infos = explode(";", $ligne);
     if($thisID == $infos[0]){   
         
       $nom = $infos[1];
       $prenom= $infos[2];
       $email = $infos[3];
       $telephone = $infos[4];     
     }
 }
 fclose($file);
 ?>
<body>
    <form action="suppression.php" method="POST">
        <input type="number" class="form-control" name="id" value= <?php echo $thisID ?>>
        <input type="text" class="form-control" name="nom" value = <?php echo $nom ?>>
        <input type="text" class="form-control" name="prenom" value = <?php echo $prenom ?>>
        <input type="email" class="form-control" name="email" value = <?php echo $email ?>>
        <input type="tel" class="form-control" name="telephone" value = <?php echo $telephone ?>>
        <input type="submit" class="btn btn-success" value="Soumettre">
    </form>
    
</body>
</html>