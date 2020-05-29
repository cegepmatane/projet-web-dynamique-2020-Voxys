<?php

session_start();

if(isset($_SESSION["authentifier"]))
{
    header("Location:espace-membre.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <?php include "morceaux/header.php"; ?>
<div class="container">

    <div class="loginbox">
        <form method="post" action="traitements/traitement-login.php" id="formlogin">
           
            <h1>Connexion</h1>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Pseudonyme" name="pseudo" required/>
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" name="password" required/> 
            </div>

            <div class="connexion">
                <input type="submit" value="VALIDER" />
            </div>

            <a href="inscription.php">
                <h2>Pas encore inscrit? Cliquez-ici !</h2>
            </a>
        </form>
    </div>
</div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>