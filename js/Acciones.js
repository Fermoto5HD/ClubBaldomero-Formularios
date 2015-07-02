function Bienvenida() {
    document.title = "Programá tu Futuro - Bienvenido al tutorial de formularios";
    url = "1_bienvenida";
    ResetMenu();
	CargarPaginaSeccion();
    $(".navegacion-item#inicio").css("background-color", "#FFD300");
};
function Introduccion() {
    document.title = "Programá tu Futuro - (1 de 4) Introducción a forms";
	url = "2_introduccion";
    ResetMenu();
	CargarPaginaSeccion();
    $(".navegacion-item#introduccion").css("background-color", "#FFD300");
};
function Elementos() {
    document.title = "Programá tu Futuro - (2 de 4) Elementos de un formulario";
    url = "3_elementos";
    ResetMenu();
	CargarPaginaSeccion();
    $(".navegacion-item#elementos").css("background-color", "#FFD300");
};
function BasicasPHP() {
    document.title = "Programá tu Futuro - (3 de 4) Procesando con PHP";
    url = "4_basicasPHP";
    ResetMenu();
    CargarPaginaSeccion();
    $(".navegacion-item#basicasPHP").css("background-color", "#FFD300");
};
function Ejemplo() {
    document.title = "Programá tu Futuro - (4 de 4) Armando el formulario";
    url = "5_ejemplo";
    ResetMenu();
	CargarPaginaSeccion();
    $(".navegacion-item#ejemplo").css("background-color", "#FFD300");
};
function Fin() {
    document.title = "Programá tu Futuro - ¡Felicitaciones!";
    url = "6_fin";
    ResetMenu();
	CargarPaginaSeccion();
    $(".navegacion-item#fin").css("background-color", "#FFD300");
};

function ResetMenu(){
	$(".navegacion-item#inicio").css("background-color", "initial");
    $(".navegacion-item#introduccion").css("background-color", "initial");
    $(".navegacion-item#elementos").css("background-color", "initial");
    $(".navegacion-item#basicasPHP").css("background-color", "initial");
    $(".navegacion-item#ejemplo").css("background-color", "initial");
    $(".navegacion-item#fin").css("background-color", "initial");
}


function HaciaArriba() {
	$('html, body').animate({scrollTop:0}, 500);
}