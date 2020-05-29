<?php
    namespace OneSheet; 

    require_once 'lib/onesheet/autoload.php';  

    $tableur = new Writer('');
    $tableur->addRow(array('Appareil', 'Description','Constructeur','Date de sortie'));
    foreach($listeAppareils as $item){
        $tableur->addRow(array($item['appareil'], $item['description'], $item['constructeur'],$item['datesortie']));
    }    
    $tableur->writeToFile('export-liste.xlsx');

?>
