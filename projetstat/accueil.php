<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>Document</title>
</head>
<body>

    <div class="container-accueil">
        <div class="accueilbox">        
            <div class="deconnexion">            
                <a href="deconnexion.php"><i class="fas fa-sign-out-alt"></i></a>
            </div>

            <h1>                
            <?php 
            echo "Bienvenue ";

            if(isset($_SESSION["pseudo"]))
                echo $_SESSION["pseudo"]; 
                echo " !";
            ?>
            </h1>
            <h2>Vos options :</h2> 

            <div class="selection">

            <a href ="index.php">
                <div id="box">
                    <div id="box-img">
                    <i class="fas fa-columns fa-5x"></i>
                    </div>
                    <p>Dashboard</p></a>
                </div>

            <a href ="liste.php">
                <div id="box">
                    <div id="box-img">
                        <i class="fas fa-th-list fa-5x"></i>
                    </div>                    
                    <p>Liste High-Tech</p></a>
                </div>
             

            <a href ="actualites.php">
                <div id="box">
                    <div id="box-img">
                        <i class="fas fa-rss-square fa-5x"></i>
                    </div>
                    <p>Actualités</p></a>
                </div>

                <a href ="recherche-avancee.php">
                <div id="box">
                    <div id="box-img">
                        <i class="fas fa-search-plus fa-5x"></i>
                    </div>
                    <p>Recherche avancée</p></a>
                </div>      
            
                <?php
                if(isset($_SESSION["authentifier"]))
                {
                ?>
            <a href ="panneau-admin/accueil-admin.php">
                <div id="box">
                    <div id="box-img">
                        <i class="fas fa-users-cog fa-5x"></i>
                    </div>
                    <p>Panneau admin</p></a>
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