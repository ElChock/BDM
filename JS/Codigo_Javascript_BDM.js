//Rotar imagen para el audio: transform: rotate(-756deg);
/*Validaciones*/
function FBotonInicioSesion(){
    var Boton=document.getElementById("BotonInicioSesion");
    var CorreoInicioSesion=document.getElementById("CorreoInicioSesion");
    var ContrasenaInicioSesion=document.getElementById("ContrasenaInicioSesion");
    if(CorreoInicioSesion.value=="" || ContrasenaInicioSesion.value==""){
            Boton.style.visibility="hidden";
    } else{
            Boton.style.visibility="visible";
    }
}

function FBotonRegistroUsuario(){
    var Boton=document.getElementById("BotonRegistroSesion");
    var Alias=document.getElementById("RegistroAlias");
    var Nombre=document.getElementById("RegistroNombre");
    var Apellidos=document.getElementById("RegistroApellidos");
    var Correo=document.getElementById("RegistroCorreo");
    var Contrasena=document.getElementById("RegistroContrasena");
    
    if(Alias.value==="" || Nombre.value==="" || Apellidos.value==="" || Correo.value==="" || Contrasena.value===""){
            Boton.style.visibility="hidden";
    } else{
            Boton.style.visibility="visible";
    }
}

/*Otras funciones*/
function AbrirRegistroUsuario(){
        FBotonInicioSesion();
	document.getElementById("EspacioGris").style.zIndex= 1000;
	document.getElementById("EspacioGris").style.visibility= "visible";
	document.getElementById("RegistroUsuario").style.zIndex= 1001;
	document.getElementById("RegistroUsuario").style.visibility= "visible";
}
function AbrirInicioSesionUsuario(){
	document.getElementById("EspacioGris").style.zIndex= 1000;
	document.getElementById("EspacioGris").style.visibility= "visible";
	document.getElementById("InicioSesionUsuario").style.zIndex= 1001;
	document.getElementById("InicioSesionUsuario").style.visibility= "visible";
}

function CerrarInicioSesionUsuario(){
	document.getElementById("EspacioGris").style.zIndex= -1000;
	document.getElementById("EspacioGris").style.visibility= "hidden";
	document.getElementById("InicioSesionUsuario").style.zIndex= -1001;
	document.getElementById("InicioSesionUsuario").style.visibility= "hidden";
}

function CerrarRegistroUsuario(){
	document.getElementById("EspacioGris").style.zIndex= -1000;
	document.getElementById("EspacioGris").style.visibility= "hidden";
	document.getElementById("RegistroUsuario").style.zIndex= -1001;
	document.getElementById("RegistroUsuario").style.visibility= "hidden";
}

function Desplegar() {
	document.getElementById("MenuOpciones").style.display="block";
}

function Minimizar() {
	document.getElementById("MenuOpciones").style.display="none";
}

function DesplegarBusquedaAvanzada() {
	var x=document.getElementById("BusquedaAvanzada");
	if(x.style.display=="none")
	{
		document.getElementById("BusquedaAvanzada").style.display="block";
	} else{
		document.getElementById("BusquedaAvanzada").style.display="none";
	}
}

function MostrarEditorInformacionPersonal(){
	document.getElementById("EdicionInformacionPersonal").style.display= "block";
	document.getElementById("InformacionPersonal").style.display="none";
}

function OcultarEditorInformacionPersonal(){
	document.getElementById("EdicionInformacionPersonal").style.display= "none";
	document.getElementById("InformacionPersonal").style.display="block";
}

function MostrarCargarImagen(NumeroClase){
	document.getElementsByClassName("Cargar")[NumeroClase].style.visibility="visible";
}

function OcultarCargarImagen(NumeroClase){
	document.getElementsByClassName("Cargar")[NumeroClase].style.visibility="hidden";
}

var VelocidadDiscoVueltas=0;
var AnguloDisco=0;
function ReproducirAudio(){
	var audio=document.getElementById("PistaAudio");
	if(audio.paused){
		audio.play();
		//VelocidadDiscoVueltas=1;
		document.getElementsByClassName("DiscoVinilo")[0].style.WebkitTransform = "rotate(".concat(String(10), "deg)"); 
		//DiscoVueltas();
	} else{
		audio.pause();
		document.getElementsByClassName("DiscoVinilo")[0].style.WebkitTransform = "rotate(".concat(String(0), "deg)");
		//VelocidadDiscoVueltas=0;
	}
}

function DiscoVueltas(){
	var disco=document.getElementById("DiscoVinilo");
	while(VelocidadDiscoVueltas>0){
		//disco.style.WebkitTransform = "rotate("+String(AnguloDisco)+"deg)"; 
		disco.style.WebkitTransform = "rotate(".concat(String(AnguloDisco), "deg)"); 
		AnguloDisco++;
	}
}
