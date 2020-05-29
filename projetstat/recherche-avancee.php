<?php

require_once "accesseur/pdo.php";

$SQL_SELECT = "SELECT appareil, description, constructeur, datesortie from hightech";

$requeteListeAppareils = $db->prepare($SQL_SELECT);
$requeteListeAppareils->execute();
$listeAppareils = $requeteListeAppareils->fetchAll();

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

<div class="recherche-avancee-box">
    <form method="get" action="traitements/resultat-recherche-avancee.php">
       
            <div class="textbox">
                <label for="recherche-appareil">Nom de l'appareil :</label>
                <input type="text" name="appareil"/>
            </div>

            <div class="textbox">
                <label for="recherche-description">Description : ⁢⁢⁢⁢⁢ </label>
                <input type="text" name="description"/>
            </div>

            <div class="textbox">
                <label for="recherche-constructeur">Constructeur :</label>
                <input type="text" name="constructeur"/>
            </div>

            <div class="textbox">
                <label for="recherche-datesortie">Date de sortie :</label>
                <input type="text" name="datesortie"/>
            </div>

        <div class="connexion">
            <input type="submit" value="RECHERCHER"/>
            <input type="hidden" name="id" value="<?=$hightech['id']?>"/>
        </div>

    </form>
</div>
</div>


    <script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>    
</body>
</html>