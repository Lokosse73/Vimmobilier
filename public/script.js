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

function ShowConnection(){
  var Screen = document.getElementById("ConnectionScreen");
  Screen.classList.add("visible");
  Screen.classList.remove("hidden");
}
function HideConnection(){
  var Screen = document.getElementById("ConnectionScreen");
  Screen.classList.add("hidden");
  Screen.classList.remove("visible");
}