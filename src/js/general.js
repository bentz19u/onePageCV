//gestion du scrollReveal
window.sr = ScrollReveal();

sr.reveal('#console');
sr.reveal('#text');
sr.reveal('.contenuEduXP');
sr.reveal('.groupeCompe');

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