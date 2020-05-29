<?php
require_once "/var/www/html/projetstat/accesseur/pdo.php";
session_start(); 

$SQL_SELECT = "SELECT nompage, ipvisiteur, languenavigateur, referant, timestamp from clic";

include "requetes-contenu.php";

$requeteListeVisite = $db->prepare($SQL_SELECT);
$requeteListeVisite->execute();
$listeVisites = $requeteListeVisite->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style-membre.css"> 
    <link rel="stylesheet" type="text/css" href="../style.css"> 
    <link rel="stylesheet" type="text/css" href="style-dashboard.css"> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
    <?php include "../morceaux/header.php"; ?>
    <div class="container">
        <div class="membrebox"> 
            <div class="box-graph">
            <div id="canvas-holder" style="width:100%">
        <canvas id="doughnut-chart" width="800" height="450"></canvas>
    </div>
	<script>
	new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Smartphones", "Laptops", "Smartwatch"],
      datasets: [
        {
          label: "Appareils",
          backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
          data: [
            <?php foreach($NombreSmartphones as $item){echo $item['COUNT(categorie)'];}?>,
            <?php foreach($NombreLaptops as $item){echo $item['COUNT(categorie)'];}?>,
            <?php foreach($NombreSmartphones as $item){echo $item['COUNT(categorie)'];}?>
              ]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
});
</script>
            
            </div>
            <div class="box-tableau">
                <table class="tableau2">
                    <tr>
                        <th><h1>Catégorie</h1></th>
                        <th><h1>Nombre</h1></th>
                        <th><h1>Moyenne prix</h1></th>
                        <th><h1>Prix min</h1></th>                        
                        <th><h1>Prix max</h1></th>                        
                    </tr>

                    <tr>
                        <th><h1>Smartphones</h1></th>
                        <th><h2>
                        <?php
                        foreach($NombreSmartphones as $item)
                        {
                            echo $item['COUNT(categorie)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MoyennePrixSmartphones as $item)
                        {
                            echo $item['AVG(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MinPrixSmartphones as $item)
                        {
                            echo $item['MIN(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MaxPrixSmartphones as $item)
                        {
                            echo $item['MAX(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                    </tr>

                    <tr>
                        <th><h1>Ordinateur portable</h1></th>
                        <th><h2>
                        <?php
                        foreach($NombreLaptops as $item)
                        {
                            echo $item['COUNT(categorie)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th>
                        <h2>
                        <?php
                        foreach($MoyennePrixLaptops as $item)
                        {
                            echo $item['AVG(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th>
                        <h2>
                        <?php
                        foreach($MinPrixLaptops as $item)
                        {
                            echo $item['MIN(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MaxPrixLaptops as $item)
                        {
                            echo $item['MAX(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                    </tr>

                    <tr>
                    <th><h1>Montre intelligente</h1></th>
                        <th><h2>
                        <?php
                        foreach($NombreSmartwatchs as $item)
                        {
                            echo $item['COUNT(categorie)'];
                        }
                        ?>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MoyennePrixSmartwatchs as $item)
                        {
                            echo $item['AVG(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MinPrixSmartwatchs as $item)
                        {
                            echo $item['MIN(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                        <th><h2>
                        <?php
                        foreach($MaxPrixSmartwatchs as $item)
                        {
                            echo $item['MAX(prix)'];
                        }
                        ?>
                        </h2>
                        </th>
                    </tr>
                   
                </table>
            </div>                
        </div>
    </div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
