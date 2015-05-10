<<<<<<< HEAD
<!DOCTYPE html >

<html>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!-- Cette page permet, via un formulaire, l'inscription d'un medecin. L'inscription dans la base de donnees se fera grace à "action="inscriptionMedecinBD.php" -->

>>>>>>> origin/master
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
			Inscription des docteurs<br> 
				<form name="myForm"  method="post" action="inscriptionMedecinBD.php">
					<BR>
					<fieldset>
						<legend> A propos de vous : </legend><BR>
						<label for="nom">Nom :</label><BR>
						<Input type = "text" name="nom" placeholder="à remplir"><span id="maZoneNom" class="error"></span> <BR>
						<label for="prenom">Prénom :</label><BR>
						<Input type = "text" name="prenom" placeholder="à remplir"><span id="maZonePrenom" class="error"></span> <BR>
						<label for="mail">E-mail :</label><BR>
						<Input type = "text" name="mail" placeholder="à remplir"><span id="maZoneMail" class="error"></span> <BR>
						<?php
							$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB") or die(mysqli_error());
							if(!$connexion){
								die('could not connect:'.mysql-error());
							}
							
							$db = mysqli_select_db($connexion, 'clinique');
							$result = mysqli_query($connexion, "SELECT nomSpe FROM specialite");
							
							echo "<label for=\"specialites\">Specialité :<BR></label>";
							echo "<select name=\"specialites\" id=\"specialites\">";
							
							while ($row = mysqli_fetch_array($result)){
								echo "<option value=\"".$row['nomSpe']."\">".$row['nomSpe']."</option>";
							}
							
							echo "</select><BR>"
						?>
					<BR><BR>
					</fieldset>
					<fieldset>
						<legend> Votre mot de passe :</legend><BR>
						<label for="pwd">Mot de passe :</label><BR>
						<input type="password" name="pwd"><span id="maZonePwd" class="error"></span><BR>
						<label for="pwd2">Confirmation du mot de passe :</label><BR>
						<input type="password" name="pwd2"><span id="maZonePwd" class="error"></span><BR>
					</fieldset>
					<p>
						<Input type ="submit" value ="Valider"/>
						<input type="reset" value="Effacer"/><BR>
					</p>
				</form>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>
 