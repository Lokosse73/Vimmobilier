var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var pos = "close";

openBtn.onclick = openCloseNav;

/* Set the width of the side navigation to 300px */
function openCloseNav() {
  if(pos === "close"){
    sidenav.classList.add("sidShow");
    pos = "open";
  }else{
    sidenav.classList.remove("sidShow");
    pos = "close";
  }
}
