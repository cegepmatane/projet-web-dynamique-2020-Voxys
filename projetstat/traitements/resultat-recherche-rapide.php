<?php

require_once "/var/www/html/projetstat/accesseur/pdo.php";

$recherche = $_GET['recherche'];
$SQL_RECHERCHE_RAPIDE = "SELECT * FROM hightech WHERE appareil LIKE '%$recherche%' OR description LIKE '%$recherche%'";

$requeteListeAppareils = $db->prepare($SQL_RECHERCHE_RAPIDE);
$requeteListeAppareils->execute();
$listeAppareils = $requeteListeAppareils->fetchAll();

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

    <div id="liste-produit">
            <?php 
            
            foreach($listeAppareils as $item)
            {
            ?>
    
                <div class="liste-appareils">
                    <div class="illustration"></div>
                    <h3 class="appareil"><?=$item['appareil']?></h3>
                    <p class="description"><?=$item['description']?></p>			
                    <p class="constructeur"><?=$item['constructeur']?></p>
                    <p class="datesortie"><?=$item['datesortie']?></p>
                </div>
    
            <?php	
            }
            ?>
            </div>
</body>
</html>