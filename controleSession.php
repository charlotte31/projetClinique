<?php
//permet de controler que l'on est bien dans la session pour acceder aux pages

session_start(); // ici on continue la session
if ((!isset($_SESSION['mail'])) || ($_SESSION['mail'] == ''))
{
	// La variable $_SESSION['mail'] n'existe pas, ou bien elle est vide
	// <=> la personne ne s'est PAS connectée
	echo '<p>Vous devez vous <a href="connexion.php">connecter</a>.</p>'."\n";
	exit();
}
?>


