<?php
require_once "accesseur/pdo.php";
session_start(); 
include "traitements/traitement-visite.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style-membre.css"> 
</head>
<body>
    <?php include "morceaux/header.php"; ?>
    <div class="container">
        <div class="membrebox">                    
            <?php include "dashboard.php"; ?>
        </div>
    </div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>
