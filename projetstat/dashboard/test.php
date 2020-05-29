<?php
require_once "/var/www/html/projetmembre/accesseur/pdo.php";
session_start(); 

$bool = true;

$SQL_SELECT = "SELECT nompage, ipvisiteur, languenavigateur, referant, timestamp from clic";

include "requetes.php";

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
    <div id="canvas-holder" style="width:100%">
        <canvas id="doughnut-chart" width="800" height="450"></canvas>
    </div>
	<script>
	new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>


<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
