<?php 

$nompage = $_SERVER['REQUEST_URI'];
$ipvisiteur = $_SERVER['HTTP_HOST'];
$languenavigateur = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],3,5);
if(isset($_SERVER['HTTP_REFERER']))
{
    $referant = substr($_SERVER['HTTP_REFERER'],3,6);
}
else
{
    $referant = "null";
}

$timestamp = $_SERVER['REQUEST_TIME'];

$AJOUTER_VISITE = "INSERT INTO clic(nompage,ipvisiteur,languenavigateur,referant,timestamp)" . "VALUES('$nompage','$ipvisiteur','$languenavigateur','$referant','$timestamp')";

$requeteAjouterVisite = $db->prepare($AJOUTER_VISITE);
$reussiteAjout = $requeteAjouterVisite->execute();

?>