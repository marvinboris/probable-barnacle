<?php
define("SERVEUR", "localhost");
define("USAGER", "root");
define("PASSE", "");
define("BD", "bdfilms");
$dsn = 'mysql:dbname=' . BD . ';host=' . SERVEUR;
try {
	$connexion = new PDO($dsn, USAGER, PASSE);
} catch (PDOException $e) {
	echo 'Connexion échouée : ' . $e->getMessage();
}
session_start();
