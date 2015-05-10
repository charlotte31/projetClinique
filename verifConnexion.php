<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- code php qui va voir dans les tables patient et medecin si le mail et le mot de passe donnés lors de la connexion existent dans les tables 
pour l'instant ne vérifie que dans la table medecin, je verifierai la table patient quand leur inscription fonctionnera 

Permet de connecter l'utilisateur a sa session-->

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
				<?php
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB") or die(mysqli_error());
					if(!$connexion){
						die('could not connect:'.mysql-error());
					}
					$db = mysqli_select_db($connexion, 'clinique');
					$mail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['mail']));
					$pwd = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['pwd']));
					$res = mysqli_query($connexion, "SELECT mail FROM medecin WHERE mail =\"".$_POST['mail']."\""); //verifier si le medecin existe
					$tab = mysqli_fetch_array($res, MYSQLI_NUM);
					if($tab[0]) // Si le mail existe.
					{
						$quete = mysqli_query($connexion, "SELECT pwd FROM medecin WHERE mail=\"".$_POST['mail']."\"");
						$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
						if($pwd == $infos[0])
						{
							// C'est ici que je mets le code servant à effectuer la connexion, car le mot de passe est bon.
<<<<<<< HEAD
							if (isset($_POST['mail']) && isset($_POST['pwd'])) {
								// on la démarre :)
								session_start ();
								// on enregistre les paramètres de notre visiteur comme variables de session ($mail et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
								$_SESSION['mail'] = $mail;
								$_SESSION['pwd'] = $pwd;
								// on redirige notre visiteur vers une page de notre section membre
								header ('location: pageMembreMedecin.php');
								echo 'ok';
=======
							if (isset($_POST['mail']) && isset($_POST['pwd']) ) { 
								$quete = mysqli_query($connexion, "SELECT administrateur FROM medecin WHERE mail=\"".$_POST['mail']."\"");//on regarde dans un premier temps si c'est l'administrateur
								$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
								if($infos[0] == 1){
									// on la démarre :)
									session_start ();
									// on enregistre les paramètres de notre visiteur comme variables de session ($mail et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
									$_SESSION['mail'] = $mail;
									$_SESSION['pwd'] = $pwd;
									// on redirige notre visiteur vers une page de notre section membre
									header ('location: pageAdministrateur.php');
								}
								else{//on va verifier si le medecin a ete accepte par l'adm, si ce n'est pas le cas : redirection vers page d'attente
									$quete = mysqli_query($connexion, "SELECT accepte FROM medecin WHERE mail=\"".$_POST['mail']."\"");
									$infos = mysqli_fetch_array($quete, MYSQLI_NUM);
									if($infos[0] == 1){
										// on la démarre :)
										session_start ();
										// on enregistre les paramètres de notre visiteur comme variables de session ($mail et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
										$_SESSION['mail'] = $mail;
										$_SESSION['pwd'] = $pwd;
										// on redirige notre visiteur vers une page de notre section membre
										header ('location: pageMembreMedecin.php');
									}
									else {
										header ('location: attenteValidation.php');
									}
								}
>>>>>>> origin/master
							}
						}
						else // Si le couple mail/ mot de passe n'est pas bon.
						{
							echo 'Vous n\'avez pas rentré les bons identifiants';
						}
					}
				?>
			</div>
		</div>
		<?php include("footer.php"); ?>
	</body>
</html>