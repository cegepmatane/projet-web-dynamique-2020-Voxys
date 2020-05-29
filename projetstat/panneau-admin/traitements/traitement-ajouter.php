<?php

include "../pdo.php";

include "traitement-illustration.php";

$appareil = $_POST["appareil"];
$description = $_POST["description"];
$constructeur = $_POST["constructeur"];
$datesortie = $_POST["datesortie"];
$categorie = $_POST["categorie"];
$prix = $_POST["prix"];
$illustration = $_FILES['illustration']['name'];

$AJOUTER_PRODUIT = "INSERT INTO hightech(appareil,description,constructeur,datesortie,categorie,illustration,prix)" . "VALUES('$appareil','$description','$constructeur','$datesortie','$categorie','$illustration','$prix')";

$requeteAjouterProduit = $db->prepare($AJOUTER_PRODUIT);
$reussiteAjout = $requeteAjouterProduit->execute();

if($reussiteAjout){
    header('refresh:2;url=../ajouter-appareil.php');
    ?>
    Votre produit à été ajouté à la base de données !
<?php
}
?>
