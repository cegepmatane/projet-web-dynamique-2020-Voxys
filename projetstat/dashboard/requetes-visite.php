<?php

$SQL_SELECT_fr_FR ="SELECT COUNT(ipvisiteur) from clic as nombre_clic WHERE languenavigateur='fr-FR'";
$SQL_SELECT_fr_CA ="SELECT COUNT(ipvisiteur) from clic as nombre_clic WHERE languenavigateur='fr-CA'";
$SQL_SELECT_en_US ="SELECT COUNT(ipvisiteur) from clic as nombre_clic WHERE languenavigateur='en-US'";
$SQL_SELECT_es_ES ="SELECT COUNT(ipvisiteur) from clic as nombre_clic WHERE languenavigateur='es-ES'";

$SQL_SELECT_VISIT_fr_FR ="SELECT COUNT(distinct ipvisiteur) from clic as nombre_clic WHERE languenavigateur='fr-FR'";
$SQL_SELECT_VISIT_fr_CA ="SELECT COUNT(distinct ipvisiteur) from clic as nombre_clic WHERE languenavigateur='fr-CA'";
$SQL_SELECT_VISIT_en_US ="SELECT COUNT(distinct ipvisiteur) from clic as nombre_clic WHERE languenavigateur='en-US'";
$SQL_SELECT_VISIT_es_ES ="SELECT COUNT(distinct ipvisiteur) from clic as nombre_clic WHERE languenavigateur='es-ES'";

$requeteClic_fr_FR = $db->prepare($SQL_SELECT_fr_FR);
$requeteClic_fr_FR->execute();
$nombreClics_fr_FR = $requeteClic_fr_FR->fetchAll();

$requeteClic_fr_CA = $db->prepare($SQL_SELECT_fr_CA);
$requeteClic_fr_CA->execute();
$nombreClics_fr_CA = $requeteClic_fr_CA->fetchAll();

$requeteClic_en_US = $db->prepare($SQL_SELECT_en_US);
$requeteClic_en_US->execute();
$nombreClics_en_US = $requeteClic_en_US->fetchAll();

$requeteClic_es_ES = $db->prepare($SQL_SELECT_es_ES);
$requeteClic_es_ES->execute();
$nombreClics_es_ES = $requeteClic_es_ES->fetchAll();

$requeteVisite_fr_FR = $db->prepare($SQL_SELECT_VISIT_fr_FR);
$requeteVisite_fr_FR->execute();
$nombreVisites_fr_FR = $requeteVisite_fr_FR->fetchAll();

$requeteVisite_fr_CA = $db->prepare($SQL_SELECT_VISIT_fr_CA);
$requeteVisite_fr_CA->execute();
$nombreVisites_fr_CA = $requeteVisite_fr_CA->fetchAll();

$requeteVisite_en_US = $db->prepare($SQL_SELECT_VISIT_en_US);
$requeteVisite_en_US->execute();
$nombreVisites_en_US = $requeteVisite_en_US->fetchAll();

$requeteVisite_es_ES = $db->prepare($SQL_SELECT_VISIT_es_ES);
$requeteVisite_es_ES->execute();
$nombreVisites_es_ES = $requeteVisite_es_ES->fetchAll();

?>