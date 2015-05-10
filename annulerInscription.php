<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Cette page permet au patient dont l'inscription n'a pas encore ete acceptee de supprimer son inscription et donc
d'etre supprime de la base de donnees.
Pour cela, le patient recherche via son mail et son mot de passe dans la base de donnees puis supprime-->

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
				<b>Annuler l'inscription en cours :</b><BR>
				<form name="myForm"  method="post" action="annulerInscriptionAction.php">
				<fieldset>
					<legend> Vos données: </legend><BR>
					<label for="mail">E-mail :</label><BR>
					<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR>
					<label for="pwd">Mot de passe :</label><BR>
					<input type="password" name="pwd"><span id="maZonePwd" class="error"></span><BR>
				</fieldset>
				<Input type ="submit" value ="Valider"/>
				<input type="reset" value="Effacer"/><BR>
				</form>
				</p>
			</div> 
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>
 