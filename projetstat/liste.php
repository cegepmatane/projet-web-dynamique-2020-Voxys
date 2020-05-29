<?php

require_once "accesseur/pdo.php";
session_start();

$image_path = "illustration/";

$SQL_SELECT = "SELECT appareil, description, constructeur, datesortie, illustration from hightech";

$requeteListeAppareils = $db->prepare($SQL_SELECT);
$requeteListeAppareils->execute();
$listeAppareils = $requeteListeAppareils->fetchAll();

include "export.php";
include "traitements/traitement-visite.php";
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

    <div id="liste-produit">
            <?php 

            $path = "mini/";
            
            foreach($listeAppareils as $item)
            {
            ?>

                <div class="liste-appareils">
                    <div class="illustration"><img src=<?php echo $path . $item['illustration'];?> alt="erreur image"></div>
                    <h3 class="appareil"><?=$item['appareil']?></h3>
                    <p class="description"><?=$item['description']?></p>			
                    <p class="constructeur"><?=$item['constructeur']?></p>
                    <p class="datesortie"><?=$item['datesortie']?></p>
                </div>
    
            <?php	
            }
            ?>

            <div class="export"> 
                <a href="export-liste.xlsx"><input type="submit" value="Exporter la liste"/></a>
            </div>
            </div>

    <script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>    
</body>
</html>