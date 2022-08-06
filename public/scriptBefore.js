function ShowLogin(){
    var Screen = document.getElementById("ConnectionScreen");
    Screen.classList.add("visible");
    Screen.classList.remove("hidden");
    HideSignup();
}
function HideLogin(){
    var Screen = document.getElementById("ConnectionScreen");
    Screen.classList.add("hidden");
    Screen.classList.remove("visible");
}
function ShowSignup(){
    var Screen = document.getElementById("SignupScreen");
    Screen.classList.add("visible");
    Screen.classList.remove("hidden");
    HideLogin();
}
function HideSignup(){
    var Screen = document.getElementById("SignupScreen");
    Screen.classList.add("hidden");
    Screen.classList.remove("visible");
}
function ShowBuildings(){
    var Screen = document.getElementById("NewBuildingScreen");
    Screen.classList.add("visible");
    Screen.classList.remove("hidden");
}
function HideBuilding(){
    var Screen = document.getElementById("NewBuildingScreen");
    Screen.classList.add("hidden");
    Screen.classList.remove("visible");
}
function selectform(selected){
    var select = document.getElementById("select");
    select.value = selected;
}