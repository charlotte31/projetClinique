<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />

<!-- cette page permet a l'administrateur d'accepter ou refuser l'inscription de nouveaux inscrits.
Tant que les nouveaux inscrits ne  sont pas acceptes, le booleen "accepte" est a 0.
Le nouveau membre ne peut pas encore se connecter a sa session.
Il peut simplement annuler son inscription, ce qui le supprime de la base de donnees.
Apres acceptation, le booleen "accepte" passe a 1 et le membre peut se connecter a sa session.
Si l'administrateur refuse l'inscription, les informations sont supprimees de la base de donnees-->

<?php
	require('controleSession.php');
?>
<meta name="Description" content="A free open source web design by Gen.  Free for anyone to use as long as credits are intact. " />
<meta name="Keywords" content="open source web design,http://gendesigns.blogspot.com" />
<meta name="Copyright" content="Gen" />
<meta name="Designed By" content="http://gendesigns.blogspot.com" />
<meta name="Language" content="English" />
<title> Clinique </title>
<link type="text/css" rel="stylesheet" href="style.css"/>
	</head>
		<body>
			<?php include("menuMembreAdmin.php"); ?>
			<?php include("menuGaucheMedecin.php"); ?>
				<div id="container">
					<div id="content">
						<?php
						$connexion = mysqli_connect("localhost", "root", "e8EfXCjXDNpVvRaB");
						mysqli_select_db($connexion, 'clinique');
						//on recupere tous booleens pour permettre l'acceptation des medecins
						$resMed = mysqli_query($connexion, "SELECT * FROM medecin"); 
						$tabMed = mysqli_fetch_array($resMed, MYSQLI_BOTH);
						while($tabMed = mysqli_fetch_array($resMed, MYSQLI_BOTH)){
							if($tabMed['accepte']==0){
								//on affiche les medecins en attente
								echo 'Nom :';
								echo $tabMed['nom']."<br>";
								echo 'Prenom :';
								echo $tabMed['prenom']."<br>";
								echo 'E-mail :';
								echo $tabMed['mail'];
								echo '<a href="gestionNouveauxInscrits.php?action=accepter&idMedecin='.$tabMed['idMedecin'].'"><br>Accepter / </a>';
								echo '<a href="gestionNouveauxInscrits.php?action=refuser&idMedecin='.$tabMed['idMedecin'].'">Refuser</a>';
								echo '<br><br>';
							} 
						}
						if (isset($_GET['action']) AND isset($_GET['idMedecin'])){
							$action = $_GET['action'];
							if ($action == "accepter"){
								//si le medecin est accepte le booleen passe a 1
								mysqli_query($connexion, "UPDATE medecin SET accepte = 1 WHERE  idMedecin =\"".$_GET['idMedecin']."\"");
							}
							elseif ($action == "refuser"){
								//suppression du medecin de la base de données
								mysqli_query($connexion, "DELETE FROM medecin WHERE idMedecin =\"".$_GET['idMedecin']."\"");
							}
						}
						
						//on fait la meme chose pour les patients
						$resPatient = mysqli_query($connexion, "SELECT * FROM patient"); 
						$tabPatient = mysqli_fetch_array($resPatient, MYSQLI_BOTH);
						while($tabPatient = mysqli_fetch_array($resPatient, MYSQLI_BOTH)){
							if($tabPatient['accepte']==0){
								//on affiche les medecins en attente
								echo 'Nom :';
								echo $tabPatient['nom']."<br>";
								echo 'Prenom :';
								echo $tabPatient['prenom']."<br>";
								echo 'E-mail :';
								echo $tabPatient['mail'];
								echo '<a href="gestionNouveauxInscrits.php?action=accepter&idPatient='.$tabPatient['idMedecin'].'"><br>Accepter / </a>';
								echo '<a href="gestionNouveauxInscrits.php?action=refuser&idPatient='.$tabPatient['idMedecin'].'">Refuser</a>';
								echo '<br><br>';
							} 
						}
						if (isset($_GET['action']) AND isset($_GET['idPatient'])){
							$action = $_GET['action'];
							if ($action == "accepter"){
								//si le medecin est accepte le booleen passe a 1
								mysqli_query($connexion, "UPDATE patient SET accepte = 1 WHERE  idPatient =\"".$_GET['idPatient']."\"");
							}
							elseif ($action == "refuser"){
								//suppression du medecin de la base de données
								mysqli_query($connexion, "DELETE FROM patient WHERE idPatient =\"".$_GET['idPatient']."\"");
							}
						}						
						?>
					
					</div>
				</div>
			<?php include("footer.php"); ?>
		</body>
</html>
 

			