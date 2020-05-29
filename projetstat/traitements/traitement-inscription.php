<?php

require_once "/var/www/html/projetstat/accesseur/pdo.php";

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$email = $_POST['email'];

$requete = $db->prepare("INSERT INTO membres(pseudo,password,email) VALUES('$pseudo','$password','$email')");
$requete->execute();

if($requete)
{
    $result = "Votre inscription a bien été enregistrée.";
    header('refresh:2;url=../login.php');
}

else
{
    $result = "Echec de l'inscription.";
    header('refresh:2;url=../inscription.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css"> 
</head>
<body>
    <?php include "../morceaux/header.php"; ?>
    <div class="container">
        <div class="result">
            <?php echo $result; ?>
        </div>
    </div>
</body>
</html>
