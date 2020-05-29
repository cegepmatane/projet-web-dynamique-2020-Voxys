<?php

require_once "/var/www/html/projetstat/accesseur/pdo.php";
session_start();

$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

$sql_select = "SELECT * FROM membres WHERE pseudo = '$pseudo'";

$requete = $db->prepare($sql_select);
$requete->execute();
$membre = $requete->fetch();
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
            <?php
                if(isset($password) == $membre['password'] && isset($pseudo) == $membre['pseudo'])
                {
                    include "../morceaux/chargement.php";
                    header('refresh:2;url=../espace-membre.php');
                    $_SESSION["pseudo"] = $pseudo;
                    $_SESSION["password"] = $password;
                    $_SESSION["authentifier"] = true;
                }
                else
                {
                    include "../morceaux/echec.php";
                    header('refresh:2;url=../login.php');
                }

                
            ?>
        </div>
    </div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
