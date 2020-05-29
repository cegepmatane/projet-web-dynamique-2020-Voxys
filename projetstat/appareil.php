<?php 

require_once "accesseur/pdo.php";

$id = $_GET["id"];

$MESSAGE_SQL_PRODUIT = "SELECT appareil, description, constructeur, datesortie from hightech where id=" . $id;

$requeteappareil = $db->prepare($MESSAGE_SQL_PRODUIT);
$requeteappareil->execute();
$appareil = $requeteappareil->fetch();

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
            
            <item>
                <div class="liste-appareils">
                    <div class="illustration"></div>
                    <h3 class="appareil"><?=$appareil['appareil']?></h3>
                    <p class="description"><?=$appareil['description']?></p>			
                    <p class="constructeur"><?=$appareil['constructeur']?></p>
                    <p class="datesortie"><?=$appareil['datesortie']?></p>
                </div>
            </item>
    
    </div>
</body>
</html>