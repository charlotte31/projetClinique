<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<!-- Formulaire pour la connexion de medecin ou de patient, 
demande mail et mot de passe comme identifiants-->
 
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
				<form name="myConnexion"  method="post" action= "verifConnexion.php">
					<fieldset>
						<legend> Connexion : </legend><BR>	
							<label for="mail">E-mail :</label><BR>
							<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR><BR>
							<label for="pwd">Mot de passe :</label><BR>
							<input type="password" name="pwd" placeholder="à remplir"><span id="maZonePwd" class="error"></span><BR>
						</legend>
					</fieldset>
					<Input type ="submit" value ="Valider">
					<input type="reset" value="Effacer"><BR>
				</form>	
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>