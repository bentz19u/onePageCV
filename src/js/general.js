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

function langEn() {
	ajaxLang('En');
}

function langFr() {
	ajaxLang('Fr');
}

function ajaxLang(langueUtil){

	$.ajax({
      type: "POST",
      url: "http://localhost/html/onePageCV/index.php",
      dataType: "json",
      data: {
      	lang: langueUtil
      },
      success: function(){
      		alert('toto');
          //location.reload();
      },
	  error: function(){
	    alert('failure');
	  }
   });
}
