var id;



function LogIn(){
  console.log("login");

  var main=  document.getElementsByClassName("Registrarse");
  main[0].style.visibility = "hidden";
    main[0].style.display = "none";

  


var login=  document.getElementsByClassName("login");
login[0].style.visibility="visible";
login[0].style.display="block"
}




function Registrarse(){
 

  var login=  document.getElementsByClassName("login");
  login[0].style.visibility = "hidden";
    login[0].style.display = "none";

  

var Registrarse=  document.getElementsByClassName("Registrarse");
Registrarse[0].style.visibility="visible";
Registrarse[0].style.display="block"
}













function Laser(){
  if(window.innerWidth>575){

  var audio = new Audio('../Sonidos/laser1.mp3');
  audio.currentTime=1.2;
  audio.play();
}

}
