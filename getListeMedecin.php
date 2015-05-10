<?php

header("Content-Type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<list>";

$idSpecialite = (isset($_POST["IdSpecialite"])) ? htmlentities($_POST["IdSpecialite"]) : NULL;
if ($idSpecialite) {
	$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB") or die(mysqli_error());
	if(!$connexion){
		die('could not connect:'.mysql-error());
	}
	$db = mysqli_select_db($connexion, 'clinique');
	
	$query = mysqli_query($connexion, "SELECT nom FROM medecin WHERE idSpe=" . $idSpecialite);
	while ($back = mysqli_fetch_array($query)) {
		echo "<doctor name=\"" . $back["nom"] . "\"/>";
	}
}
echo "</list>";

?>