<?php
$NOMBRE_SMARTPHONE = "SELECT COUNT(categorie) from hightech where categorie='smartphone'";
$NOMBRE_LAPTOP = "SELECT COUNT(categorie) from hightech where categorie='laptop'";
$NOMBRE_SMARTWATCH = "SELECT COUNT(categorie) from hightech where categorie='smartwatch'";

$MOYENNE_SMARTPHONE = "SELECT AVG(prix) from hightech where categorie='smartphone'";
$MOYENNE_LAPTOP = "SELECT AVG(prix) from hightech where categorie='laptop'";
$MOYENNE_SMARTWATCH = "SELECT AVG(prix) from hightech where categorie='smartwatch'";

$MAX_SMARTPHONE = "SELECT MAX(prix) FROM hightech where categorie='smartphone'";
$MAX_LAPTOP = "SELECT MAX(prix) FROM hightech where categorie='laptop'";
$MAX_SMARTWATCH = "SELECT MAX(prix) FROM hightech where categorie='smartwatch'";

$MIN_SMARTPHONE = "SELECT MIN(prix) FROM hightech where categorie='smartphone'";
$MIN_LAPTOP = "SELECT MIN(prix) FROM hightech where categorie='laptop'";
$MIN_SMARTWATCH = "SELECT MIN(prix) FROM hightech where categorie='smartwatch'";

$NombreSmartphone = $db->prepare($NOMBRE_SMARTPHONE);
$NombreSmartphone->execute();
$NombreSmartphones = $NombreSmartphone->fetchAll();

$NombreLaptop= $db->prepare($NOMBRE_LAPTOP);
$NombreLaptop->execute();
$NombreLaptops = $NombreLaptop->fetchAll();

$NombreSmartwatch= $db->prepare($NOMBRE_SMARTWATCH);
$NombreSmartwatch->execute();
$NombreSmartwatchs = $NombreSmartwatch->fetchAll();

$MoyennePrixSmartphone = $db->prepare($MOYENNE_SMARTPHONE);
$MoyennePrixSmartphone->execute();
$MoyennePrixSmartphones = $MoyennePrixSmartphone->fetchAll();

$MoyennePrixLaptop = $db->prepare($MOYENNE_LAPTOP);
$MoyennePrixLaptop->execute();
$MoyennePrixLaptops = $MoyennePrixLaptop->fetchAll();

$MoyennePrixSmartwatch = $db->prepare($MOYENNE_SMARTWATCH);
$MoyennePrixSmartwatch->execute();
$MoyennePrixSmartwatchs = $MoyennePrixSmartwatch->fetchAll();

$MaxPrixSmartphone = $db->prepare($MAX_SMARTPHONE);
$MaxPrixSmartphone->execute();
$MaxPrixSmartphones = $MaxPrixSmartphone->fetchAll();

$MaxPrixLaptop = $db->prepare($MAX_LAPTOP);
$MaxPrixLaptop->execute();
$MaxPrixLaptops = $MaxPrixLaptop->fetchAll();

$MaxPrixSmartwatch = $db->prepare($MAX_SMARTWATCH);
$MaxPrixSmartwatch->execute();
$MaxPrixSmartwatchs = $MaxPrixSmartwatch->fetchAll();

$MinPrixSmartphone = $db->prepare($MIN_SMARTPHONE);
$MinPrixSmartphone->execute();
$MinPrixSmartphones = $MinPrixSmartphone->fetchAll();

$MinPrixLaptop = $db->prepare($MIN_LAPTOP);
$MinPrixLaptop->execute();
$MinPrixLaptops = $MinPrixLaptop->fetchAll();

$MinPrixSmartwatch = $db->prepare($MIN_SMARTWATCH);
$MinPrixSmartwatch->execute();
$MinPrixSmartwatchs = $MinPrixSmartwatch->fetchAll();







?>