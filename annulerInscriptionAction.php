<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<!-- Cette page est appelée par annulationInscription.php.
Elle permet de supprimer de la base de donnees un patient dont l'inscrition est en cours--
c'est à dire non validée par l'administrateur-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
		<meta name="Description" content="A free open source web design by Gen.  Free for anyone to use as long as credits are intact. " />
		<meta name="Keywords" content="open source web design,http://gendesigns.blogspot.com" />
		<meta name="Copyright" content="Gen" />
		<meta name="Designed By" content="http://gendesigns.blogspot.com" />
		<meta name="Language" content="English" />
		<title> Clinique </title>
		<link type="text/css" rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<?php include("menu.php"); ?>
		<?php include("menuGauche.php"); ?>
		<div id="container">
			<div id="content">
				<p><BR>
				<?php 
				if(!empty($_POST['mail'])&&!empty($_POST['pwd']))
					{
						// D'abord, je me connecte à la base de données.
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');

						mysqli_query($connexion, "DELETE FROM medecin WHERE mail =\"".$_POST['mail']."\" or mail =\"".$_POST['pwd']."\"");				
						mysqli_query($connexion, "DELETE FROM patient WHERE mail =\"".$_POST['mail']."\" or mail =\"".$_POST['pwd']."\"");	
						
						//recapitulatif 
						echo "Votre inscription a bien été annulée";
					}
				?>
				</p>
			</div> 
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>
 

				