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
<div class="container">

    <div class="traitement-box">
        <form method="post" enctype="multipart/form-data" action="traitements/traitement-ajouter.php" id="form-traitement">
           
            <h1>Ajouter</h1>

            <div class="textbox">
                <p id="etiquette">Nom de l'appareil:</p>
                <input type="text" name="appareil"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Description:</p>
                <input type="text" name="description"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Constructeur:</p>
                <input type="text" name="constructeur"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Date de sortie:</p>
                <input type="text" name="datesortie"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Categorie</p>
                <input type="text" name="categorie"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Prix</p>
                <input type="number" name="prix"/>
            </div>

            <div class="textbox">
                <p id="etiquette">Illustration :</p>
                <input type="file" name="illustration" id="illustration"/>
            </div>

            <div class="connexion">
                <input type="submit" value="VALIDER" />
            </div>

        </form>
    </div>
</div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>