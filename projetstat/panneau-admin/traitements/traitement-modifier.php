<?php
include "../pdo.php"; 

$id = $_POST['id'];
$appareil = addslashes($_POST['appareil']);
$description = $_POST['description'];
$constructeur = $_POST['constructeur'];
$datesortie = $_POST['datesortie'];

$SQL_MODIFIER_PRODUIT = "UPDATE hightech SET appareil = '$appareil', description='$description', constructeur='$constructeur', datesortie='$datesortie' WHERE id = " . $id;

$requeteModifierProduit = $db->prepare($SQL_MODIFIER_PRODUIT);
$reussiteModification = $requeteModifierProduit->execute();
?>

<?php
if($reussiteModification) 
{
	header('refresh:2;url=../modifier-appareil.php');
?>
	Votre produit a été modifié dans la base de données
<?php	
}
?>