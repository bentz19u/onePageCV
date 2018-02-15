function myFunction() {
    var x = document.getElementById("monNav");
    if (x.className === "menuHide") {
        x.className = "responsive";
    } else {
        x.className = "menuHide";
    }
}