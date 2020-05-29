<?php
	$id = $_GET['id'];
	$SQL_PRODUIT = "SELECT * from hightech WHERE id = " . $id;
	include "pdo.php";
	$requeteAppareil = $db->prepare($SQL_PRODUIT);
	$requeteAppareil->execute();
	$hightech = $requeteAppareil->fetch();
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
<div class="container">

    <div class="traitement-box">
        <form method="post" action="traitements/traitement-supprimer.php" id="form-traitement">
           
			<div class="textbox">
                <p id="etiquette">Nom de l'appareil:</p>
                <input type="text" value="<?php echo $hightech['appareil']?>"/>
            </div>	

            <div class="connexion">
				<input type="submit" value="VALIDER"/>
				<input type="hidden" name="id" value="<?=$hightech['id']?>"/>
            </div>

        </form>
    </div>
</div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
		
		<form action="traitements/traitement-supprimer-produit.php" method="post">
		
			<input type="submit" value="Enregistrer">
			<input type="hidden" name="id" value="<?=$hightech['id']?>"/>
		</form>
	