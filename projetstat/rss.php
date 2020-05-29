<?php

require_once "accesseur/pdo.php";

$SQL_SELECT = "SELECT id, appareil, description, constructeur, datesortie from hightech";

$requeteListeAppareils = $db->prepare($SQL_SELECT);
$requeteListeAppareils->execute();
$listeAppareils = $requeteListeAppareils->fetchAll();

?>

<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>

<channel>
	<title>Liste des nouveaux films</title>
	<atom:link href="http://localhost/journal/feed/" rel="self" type="application/rss+xml" />
	<link>http://localhost/projetmembre/</link>
	<description>Les meilleurs appareils hightech du moment</description>
	<lastBuildDate>Mon, 18 Mar 2019 14:27:41 +0000	</lastBuildDate>
	<language>fr-CA</language>
	<sy:updatePeriod> hourly	</sy:updatePeriod>
	<sy:updateFrequency>1</sy:updateFrequency>
	<generator>Programmation manuelle</generator>
<?php 

	foreach($listeAppareils as $appareil)
	{
	?>
	<item>
		<title><?=$appareil['appareil']?></title>
		<link>http://localhost/projetmembre/appareil.php?id=<?=$appareil['id']?></link>
		<pubDate>Mon, 18 Mar 2019 14:27:41 +0000</pubDate>
		<category><![CDATA[Appareil]]></category>
		<guid isPermaLink="false">http://localhost/projetmembre/appareil.php?id=<?=$appareil['id']?></guid>
		<description><![CDATA[<?=$appareil['description']; ?>]]></description>
		<content:encoded><![CDATA[<?=$appareil['description']; ?>]]></content:encoded>
	</item>
	<?php
	}

?>
							
	</channel>
</rss>