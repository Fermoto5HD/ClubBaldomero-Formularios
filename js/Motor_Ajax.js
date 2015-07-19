// Los valores iniciales
	var seconds = 2;
	var divid = "cuerpo-contenido";
	var url = "1_bienvenida";
	var cargaexitosa = false;

// La función 
	function CargarPaginaSeccion(){
		// Objeto XMLHttpRequest
		var xmlHttp;
		try{
			xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
		}
		catch (e){
			try{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Para el Lenternet Explorer
			}
			catch (e){
				try{
					xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch (e){
					alert("Para visitar este sitio tendrás que actualizar el navegador, ya que el sitio utiliza AJAX como motor de carga de las secciones.");
					return false;
				}
			}
		}
		// Timestamp for preventing IE caching the GET request
			var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
			var procesourl = url+".php?t="+timestamp;
		// Corrobora disponibilidad
			xmlHttp.onreadystatechange=function(){
				if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
					document.getElementById(divid).innerHTML=xmlHttp.responseText;
					//setTimeout('objetoajax()',seconds*1000);
				}
	        }
		// Muestra que está cargando el sitio
			$('#cuerpo-contenido').html('<div id="pantalla-carga"><div id="BA-carga"></div>Cargando sección...</div>');
			$('p#progreso-porcentaje').html('Cargando');
			$('#barra').css("width", "100%");
			$('#barra').css("background-color", "rgb(255, 210, 4)");
		// Acá ocurre la magia :D 
			$.ajax({
				url: url+".php",
				type: 'GET',
				success: function() {
					xmlHttp.open("GET",procesourl,true);
					xmlHttp.send(null);
					cargaexitosa = true;
        			$('p#progreso-porcentaje').html(estadomenu + " (" + porcentaje_actual + "% progresado)");
        			$("#barra").css("width", porcentaje_actual+"%");
        			$('#barra').css("background-color", "rgb(112, 202, 198)");
				},
				error: function() {
    				document.title = "Programá tu Futuro - Error 404: Página no encontrada";
					$('#cuerpo-contenido').html('<center><div class="cover" id="home"><div class="cover-degrade" id="error404"><div class="encuadre"><div class="cover-texto">Ha ocurrido un error<p id="error404">Quizás hay un error en el servidor o se ha cortado tu conexión a Internet.</p></div></div></div></div></center>');
					cargaexitosa = false;
					$('p#progreso-porcentaje').html("Error...");
					$('#barra').css("width", "100%");
        			$('#barra').css("background-color", "rgb(240, 86, 51)");
				}
			});
		HaciaArriba();
	}

// Lo que hará al cargar el sitio 
	window.onload = function(){
		var jash = window.location.hash;
		jash = jash.replace(/#/g, '')
		// lo imprimimos
		//alert("Tu hash es: "+jash);
		if(jash.length > 1){
			url = jash;
		}
		CargarPaginaSeccion();
	}