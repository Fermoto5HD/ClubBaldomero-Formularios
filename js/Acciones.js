var menuresponsive = 1; 
var porcentaje = 100/5;
var porcentaje_actual = 0;
var estadomenu = "Ver pasos";

var paso1 = true;
var paso2 = true;
var paso3 = true;
var paso4 = true;
var paso5 = true;

function VerPasos(){
    if (menuresponsive === 1) {
        $("#navegacion").css("display", "block");
        estadomenu = "Ocultar pasos";
        document.getElementById("progreso-porcentaje").innerHTML = estadomenu + " (" + porcentaje_actual + "% progresado)";
        menuresponsive = 0;
        console.log("Menú móvil abierto");
    }
    else if (menuresponsive === 0) {
        $("#navegacion").css("display", "none");
        estadomenu = "Ver pasos";
        document.getElementById("progreso-porcentaje").innerHTML = estadomenu + " (" + porcentaje_actual + "% progresado)";
        menuresponsive = 1;
        console.log("Menú móvil cerrado");
    }
}

function Paso1(){if (paso1 === true) {PorcentajeVisual(); paso1 = false;};}
function Paso2(){if (paso2 === true) {PorcentajeVisual(); paso2 = false;};}
function Paso3(){if (paso3 === true) {PorcentajeVisual(); paso3 = false;};}
function Paso4(){if (paso4 === true) {PorcentajeVisual(); paso4 = false;};}
function Paso5(){if (paso5 === true) {PorcentajeVisual(); paso5 = false;};}
function IncrementarPorcentaje() {
    if (porcentaje_actual <= 100) {
        porcentaje_actual = Math.round(porcentaje_actual + porcentaje);
        if (porcentaje_actual >= 100) {
            porcentaje_actual = 100;
        }
        $("#barra").css("width", porcentaje_actual+"%");
    };
};
function PorcentajeVisual() {
    $("#barra").css("width", "100%");
    if (cargaexitosa === true) {
        IncrementarPorcentaje();
    };
};

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
    Paso1();
    $(".navegacion-item#introduccion").css("background-color", "#FFD300");
};
function Elementos() {
    document.title = "Programá tu Futuro - (2 de 4) Elementos de un formulario";
    url = "3_elementos";
    ResetMenu();
	CargarPaginaSeccion();
    Paso2();
    $(".navegacion-item#elementos").css("background-color", "#FFD300");
};
function BasicasPHP() {
    document.title = "Programá tu Futuro - (3 de 4) Procesando con PHP";
    url = "4_basicasPHP";
    ResetMenu();
    CargarPaginaSeccion();
    Paso3();
    $(".navegacion-item#basicasPHP").css("background-color", "#FFD300");
};
function Ejemplo() {
    document.title = "Programá tu Futuro - (4 de 4) Armando el formulario";
    url = "5_ejemplo";
    ResetMenu();
	CargarPaginaSeccion();
    Paso4();
    $(".navegacion-item#ejemplo").css("background-color", "#FFD300");
};
function Fin() {
    document.title = "Programá tu Futuro - ¡Felicitaciones!";
    url = "6_fin";
    ResetMenu();
	CargarPaginaSeccion();
    Paso5();
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