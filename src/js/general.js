//gestion du scrollReveal
window.sr = ScrollReveal();

sr.reveal('#console');
sr.reveal('#text');
sr.reveal('#button');
sr.reveal('.contenuEduXP');
sr.reveal('.groupeCompe');
sr.reveal('.realisation');
sr.reveal('#form');
sr.reveal('#listContact');

//functions pour le menu
function checkMenu() {
    let monNav = document.getElementById("monNav");
    if (monNav.className === "menuHide") {
        monNav.className = "responsive";
    } else {
        monNav.className = "menuHide";
    }
}

function onSizeChange() {
	let monNav = document.getElementById("monNav");
	monNav.className = "menuHide";
}

window.onresize = onSizeChange;

//Formulaire de contact

//Récupération des champs
var nomElement = document.getElementById("form-nom");
var mailElement = document.getElementById("form-mail");
var telephoneElement = document.getElementById("form-telephone");
var contenuElement = document.getElementById("form-contenu");

document.getElementById("form-submit").addEventListener("click", function(event){
    event.preventDefault();

    //Si jamais l'utilisateur envoie plusieurs mail, on efface le premier message d'avertissement
    let divMessage = document.getElementById("message");
    divMessage.classList.add("hidden");
    divMessage.classList.remove("message-ok");
    divMessage.classList.remove("message-error");
    divMessage.innerHTML = "";

    //Vérification des champs
    let nom = nomElement.value;
    let mail = mailElement .value;
    let telephone = telephoneElement.value;
    let contenu = contenuElement.value;

    let formOk = true;

    if((!nom || 0 === nom.length))
    {
    	nomElement.classList.add("has_error");
    	formOk = false;
    }

    let regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if((!mail || 0 === mail.length || !regex.test(mail) ))
    {
    	mailElement.classList.add("has_error");
    	formOk = false;
    }

    if((!contenu || 0 === contenu.length))
    {
    	contenuElement.classList.add("has_error");
    	formOk = false;
    }

    if(formOk){
    	//on nettoie les classes errors
    	nomElement.classList.remove("has_error");
    	contenuElement.classList.remove("has_error");
		mailElement.classList.remove("has_error");

		const params = new URLSearchParams();
		params.append('nom', nom);
		params.append('mail', mail);
		params.append('telephone', telephone);
		params.append('contenu', contenu);

		let urlOrigine = window.location.href;
		let url = 'mail.php';
		let langue = 'fr';
		if(urlOrigine.search("english") != -1){
			console.log('english');
			url = '../mail.php';
			langue = 'en';
		}

		//envoie du mail dans la requete ajax
		axios({
			method: 'post',
			url: url,
			data: params
		})
		.then(function (response) {
			if(langue == 'fr'){
				divMessage.innerHTML = "Message envoyé";
			}else if(langue == 'en'){
				divMessage.innerHTML = "Message sent";
			}
			divMessage.classList.remove("hidden");
			divMessage.classList.add("message-ok");
		})
		.catch(function (error) {
		  	if(langue == 'fr'){
				divMessage.innerHTML = "Erreur pendant l'envoie du message";
			}else if(langue == 'en'){
				divMessage.innerHTML = "Error occurred while sending the message";
			}
		  	divMessage.classList.remove("hidden");
			divMessage.classList.add("message-error");
		});
	}
}); 

nomElement.addEventListener("change", function(event){
	if((!nomElement.value || 0 === nomElement.value.length))
    {
		nomElement.classList.add("has_error");
	}else{
		nomElement.classList.remove("has_error");
	}
});

let regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

mailElement.addEventListener("change", function(event){
	if((!mailElement.value || 0 === mailElement.value.length || !regex.test(mailElement.value)))
    {
		mailElement.classList.add("has_error");
	}else{
		mailElement.classList.remove("has_error");
	}
});

contenuElement.addEventListener("change", function(event){
	if((!contenuElement.value || 0 === contenuElement.value.length))
    {
		contenuElement.classList.add("has_error");
	}else{
		contenuElement.classList.remove("has_error");
	}
});