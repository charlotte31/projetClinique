//Ce javascrpit permet de verifier le contenu du formulaire avant l'envoie dans la BD

function check()
{	
	console.log("Coucou");
	if(document.getElementById("nom").value == "") {
		document.getElementById("maZoneNom").innerHTML = "Nom invalide";
		//return false;
	}
	// if(document.getElementById("prenom").value == "") {
		// document.getElementById("maZonePrenom").innerHTML = "Prénom invalide";
		//return false;
	// }
	// if (document.getElementById("mail").value.indexOf("@") == -1){
		// document.getElementById("maZoneMail").innerHTML = "Adresse mail invalide";
		//return false;
	// }
	// if ((document.getElementById("pwd").value == null) || (document.getElementById("pwd").value == '')) {
        // document.getElementById("maZonePwd").innerHTML = "pwd invalide";
		//return false;
	// }	
	// if ((document.getElementById("pwd").value == null) != (document.getElementById("pwd2").value == '')) {
        // document.getElementById("maZonePwd2").innerHTML = "Les mots de passe saisis sont différents";
		//return false;
    // }
	//return false;	
}

function toSubmit(){
      alert('I will not submit');
      return false;
   }
