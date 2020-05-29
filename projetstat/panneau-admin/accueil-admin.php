
<?php
require_once "/var/www/html/projetstat/accesseur/pdo.php";
session_start(); 
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

    <div class="container-accueil">
        <div class="accueilbox-admin">

            
            <div class="selection">
            <a href ="ajouter-appareil.php">
                <div id="box">
                    <div id="box-img">
                    <i class="fas fa-plus fa-5x"></i>
                    </div>                    
                    <p>Ajouter appareil</p></a>
                </div>
             

            <a href ="modifier-appareil.php?id=0">
                <div id="box">
                    <div id="box-img">
                    <i class="fas fa-redo fa-5x"></i>
                    </div>
                    <p>Modifier appareil</p></a>
                </div>
            
                <?php
                if(isset($_SESSION["authentifier"]))
                {
                ?>
            <a href ="supprimer-appareil.php?id=0">
                <div id="box">
                    <div id="box-img">
                    <i class="fas fa-minus fa-5x"></i>
                    </div>
                    <p>Supprimer appareil</p></a>
                </div>
                <?php
                }
                ?>

            </div>
            
        </div>
    </div>
    

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>