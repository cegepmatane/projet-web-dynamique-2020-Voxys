<?php

$usager = 'root';
$motdepasse = '123';
$hote = '127.0.0.1';
$base = 'hightechzone';

$dsn = 'mysql:dbname='.$base.';host=' . $hote;

try
{
	$db = new PDO($dsn, $usager, $motdepasse);
}
catch(PDOException $exception)
{
	echo $e->getMessage();
}
?>
