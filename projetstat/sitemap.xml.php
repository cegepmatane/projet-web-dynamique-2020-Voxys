<?php
require_once "accesseur/pdo.php";

$SQL_SELECT = "SELECT appareil, description, constructeur, datesortie from hightech";

$requeteListeAppareils = $db->prepare($SQL_SELECT);
$requeteListeAppareils->execute();
$listeAppareils = $requeteListeAppareils->fetchAll();
print_r($listeAppareils);
?>

<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://51.161.33.191/projetmembre/sitemap.php.xml"> 
  <url>
    <loc>http://localhost/projetmembre/</loc>
    <lastmod>2019-03-23</lastmod>
  </url>

  <url>
    <loc>http://localhost/projetmembre/accueil.php</loc>
    <lastmod>2019-03-23</lastmod>
  </url>

  <url>
  <loc>http://localhost/projetmembre/liste.php</loc>
  <lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/actualites.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/deconnexion.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/espace-membre.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/inscription.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/login.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

<url>
<loc>http://localhost/projetmembre/rss.php</loc>
<lastmod>2019-03-23</lastmod>
</url>

  <?php 
  foreach($listeAppareils as $appareil)
  {
  ?>
  <url>
    <loc>http://localhost/projetmembre/appareil.php?id=<?php echo $appareil['id']?></loc>
    <lastmod>2019-03-23</lastmod>
  </url>  
  <?php 
  }
  ?>
</urlset>