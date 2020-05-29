<?php

require_once "/var/www/html/projetstat/accesseur/pdo.php";

$appareilRecherche = $_GET['appareil'];
$descriptionRecherche = $_GET['description'];
$constructeurRecherche = $_GET['constructeur'];
$dateRecherche = $_GET['datesortie'];
	
	if(!empty($appareilRecherche) || !empty($descriptionRecherche) || !empty($constructeurRecherche) || !empty($dateRecherche))
	{
		$SQL_RECHERCHE_AVANCEE = "SELECT * FROM hightech WHERE 1 = 1 ";
		
		if(!empty($appareilRecherche)) 
            $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND appareil like '%$appareilRecherche%'";
            
		if(!empty($descriptionRecherche)) 
            $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND description like '%$descriptionRecherche%'";
            
		if(!empty($constructeurRecherche))  
            $SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND constructeur like '%$realisateurRecherche%'";
            
        if(!empty($dateRecherche))  
			$SQL_RECHERCHE_AVANCEE = $SQL_RECHERCHE_AVANCEE . " AND datesortie like '%$dateRecherche%'";
    }

$requeteListeAppareils = $db->prepare($SQL_RECHERCHE_AVANCEE);
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