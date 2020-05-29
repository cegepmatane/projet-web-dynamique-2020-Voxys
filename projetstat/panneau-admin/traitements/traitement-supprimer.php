<?php

$id = $_POST['id'];

$SQL_MODIFIER_PRODUIT = "DELETE FROM hightech WHERE id = " . $id;

include "../pdo.php"; 
$requeteModifierProduit = $db->prepare($SQL_MODIFIER_PRODUIT);
$reussiteModification = $requeteModifierProduit->execute();
?>


<?php
if($reussiteModification) 
{
	header('refresh:2;url=../supprimer-appareil.php');
?>
	Votre film a été supprimer dans la base de données
<?php	
}
?>