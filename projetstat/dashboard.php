<?php
include "accesseur/pdo.php";
include "dashboard/requetes-visite.php";
include "dashboard/requetes-contenu.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>
<body>
    <div class="container-accueil">
        <div class="accueilbox">        
            <div class="deconnexion">            
                <a href="deconnexion.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>

            <h1>                
            <?="Dashboard"?>
            </h1>
            <h2>Vos options :</h2> 

            <div class="selection2">

            <a href ="dashboard/stat-visiteur.php">
                <div id="box-visiteur-grand">
                    <div id="box-img">
                    <i class=""><canvas id="myChart" width="243" height="120"></canvas>
<script>
Chart.defaults.global.legend.display = false;
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['', '', '', ''],
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
    },
});

</script></i>
                    </div>
                    <p>Statistiques visiteurs</p></a>
                </div>
            
                
            <a href ="dashboard/stat-contenu.php">
                <div id="box-visiteur">
                    <div id="box-img">
                        <i><div id="canvas-holder" style="width:200%">
        <canvas id="doughnut-chart" width="250" height="100"></canvas>
            </div>
            <script>
    Chart.defaults.global.legend.display = false;
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
            <?php foreach($NombreSmartwatchs as $item){echo $item['COUNT(categorie)'];}?>
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
</script></i>
                    </div>
                    <p>Statistiques contenus</p></a>
                </div>

                <a href ="panneau-admin/accueil-admin.php">
                <div id="box-visiteur">
                    <div id="box-img">
                        <i class="fas fa-tasks fa-5x"></i>
                    </div>
                    <p>Gestion liste</p></a>
                </div>
            

            </div>
            <div class="selection2">
                <a href ="">
                    <div id="box-visiteur">
                        <div id="box-img">
                            <i>
                                <canvas id="line-chart" width="300" height="340"></canvas>
                                <script>
                                new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: [,,,,,,,,,],
    datasets: [{ 
        data: [86,114,106,106,107,111,133,221,783],
        label: "Africa",
        borderColor: "#008000",
        fill: false
      
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
                            </i>
                        </div>
                        <p>Gain mensuel</p></a>
                    </div>

                    <a href ="">
                    <div id="box-visiteur">
                        <div id="box-img">
                        <i class="fas fa-plus fa-5x">9</i>
                        </div>
                        <p>Nouveaux membres</p></a>
                    </div>

                    <a href ="">
                    <div id="box-visiteur-grand">
                        <div id="box-img">
                            <i><canvas id="line-chart2" width="800" height="340"></canvas>
                                <script>
                                new Chart(document.getElementById("line-chart2"), {
  type: 'line',
  data: {
    labels: [,,,,,,,,,],
    datasets: [{ 
        data: [86,114,106,106,400,800,1300,2000,3000,4000],
        label: "",
        borderColor: "#FF0000",
        fill: false
      
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
                            </i>
                        </div>
                        <p>Developpement</p></a>
                    </div>
            </div>
            
        </div>
    </div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>