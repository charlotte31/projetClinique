function request(oSelect) {
	var value = oSelect.options[oSelect.selectedIndex].value;
	console.log("Valeur Selectionnée : " + value);
	var xhr   = getXMLHttpRequest();
	
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
			readData(xhr.responseXML);
			document.getElementById("loader").style.display = "none";
		} else if (xhr.readyState < 4) {
			document.getElementById("loader").style.display = "inline";
		}
	};
	
	xhr.open("POST", "getListeMedecin.php", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("IdSpecialite=" + value);
}

function readData(oData) {
	if (oData != null) {
		var nodes   = oData.getElementsByTagName("doctor");
		var oSelect = document.getElementById("medecins");
		var oOption, oInner;
		oSelect.disabled = false;
		oSelect.innerHTML = "";
		for (var i=0, c=nodes.length; i<c; i++) {
			oOption = document.createElement("option");
			oInner  = document.createTextNode("Dr. " + nodes[i].getAttribute("name"));
			oOption.value = nodes[i].getAttribute("name");
			
			oOption.appendChild(oInner);
			oSelect.appendChild(oOption);
		}
	} else {
		console.log("Les données sont vides!");
	}
}

function getXMLHttpRequest() {
	var xhr = null;
	
	if (window.XMLHttpRequest || window.ActiveXObject) {
		if (window.ActiveXObject) {
			try {
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e) {
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		} else {
			xhr = new XMLHttpRequest(); 
		}
	} else {
		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		return null;
	}
	
	return xhr;
}