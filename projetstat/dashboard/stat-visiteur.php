<?php
require_once "/var/www/html/projetmembre/accesseur/pdo.php";
session_start(); 

$bool = true;

$SQL_SELECT = "SELECT nompage, ipvisiteur, languenavigateur, referant, timestamp from clic";

include "requetes-visite.php";

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
            <canvas id="myChart" width="400" height="270"></canvas>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['fr-Fr', 'fr-CA', 'en-US', 'es-ES'],
        datasets: [{
            label: 'nombres visites',
            data: [
                <?php foreach($nombreVisites_fr_FR as $item){echo $item['COUNT(distinct ipvisiteur)'];}?>,                                                
                <?php foreach($nombreVisites_fr_CA as $item){echo $item['COUNT(distinct ipvisiteur)'];}?>, 
                <?php foreach($nombreVisites_en_US as $item){echo $item['COUNT(distinct ipvisiteur)'];}?>, 
                <?php foreach($nombreVisites_es_ES as $item){echo $item['COUNT(distinct ipvisiteur)'];}?>
                   ],
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
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
                
            </div>
            <div class="box-tableau">
                <table class="tableau">
                    <tr>
                        <th>Langue</th>
                        <th>Clic</th> 
                        <th>Visite</th>                        
                    </tr>

                    <tr>
                        <th>fr_FR</th>
                        <th>
                        <?php
                        foreach($nombreClics_fr_FR as $item)
                        {
                            echo $item['COUNT(ipvisiteur)'];
                        }
                        ?>
                        </th>
                        <th>
                        <?php
                        foreach($nombreVisites_fr_FR as $item)
                        {
                            echo $item['COUNT(distinct ipvisiteur)'];
                        }
                        ?>
                        </th>
                    </tr>

                    <tr>
                        <th>fr_CA</th>
                        <th>
                        <?php
                        foreach($nombreClics_fr_CA as $item)
                        {
                            echo $item['COUNT(ipvisiteur)'];
                        }
                        ?>
                        </th>
                        <th>
                        <?php
                        foreach($nombreVisites_fr_CA as $item)
                        {
                            echo $item['COUNT(distinct ipvisiteur)'];
                        }
                        ?>
                        </th>
                    </tr>

                    <tr>
                    <th>en-US</th>
                        <th>
                        <?php
                        foreach($nombreClics_en_US as $item)
                        {
                            echo $item['COUNT(ipvisiteur)'];
                        }
                        ?>
                        </th>
                        <th>
                        <?php
                        foreach($nombreVisites_en_US as $item)
                        {
                            echo $item['COUNT(distinct ipvisiteur)'];
                        }
                        ?>
                        </th>
                    </tr>

                    <tr>
                        <th>es</th>
                        <th>
                        <?php
                        foreach($nombreClics_es_ES as $item)
                        {
                            echo $item['COUNT(ipvisiteur)'];
                        }
                        ?>
                        </th>
                        <th>
                        <?php
                        foreach($nombreVisites_es_ES as $item)
                        {
                            echo $item['COUNT(distinct ipvisiteur)'];
                        }
                        ?>
                        </th>
                    </tr>
                   
                </table>
            </div>                
        </div>
    </div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
