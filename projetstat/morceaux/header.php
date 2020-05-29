<header>

<?php
if (isset($_SESSION["authentifier"])){
    ?> <a id="logobox" href="/projetstat/espace-membre.php"> <?php
}
else{
    ?> <a id="logobox" href="/projetstat/login.php"> <?php
}
?>    
    <h1>HIGHTECHZONE</h1>
    </a>

    <a id="logobox" href="login.php">
        <img src="/projetstat/icones/membre.png" id="logomembre">
    </a>    
</header>
<?php
if (isset($_SESSION["authentifier"])){
    ?>
<div class="navbar">
<form method="get" action="/projetstat/traitements/resultat-recherche-rapide.php" id="form-recherche">
    <i class="fas fa-search fa-1x"></i><input type="text" name="recherche" id="recherche"/>
    </form>
</div> <?php
}
?>