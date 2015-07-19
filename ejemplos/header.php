	<title>Ejemplo para entender</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="theme-color" content="#FFD300" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="../Imagenes/Favicon.ico">
	<script type='text/javascript' src="../js/jquery-2.1.0.min.js"></script>
	<style type="text/css">
		<?php //Como se van a usar unos pocos estilos prefiero incluirlos directamente en el archivo y no levantar externamente ?>
		/* Reset general */
			*{margin: 0; padding: 0;}
		/* Tipografía */
			@font-face {
			    font-family:"Open Sans";
				src:url("../fonts/OpenSans-Regular.ttf") format("truetype");
			    font-weight: normal;
			    font-style: normal;
			}
			@font-face {
			    font-family:"Gotham";
				src:url("../fonts/Gotham.ttf") format("truetype");
			    font-weight: normal;
			    font-style: normal;
			}
			@font-face {
			    font-family:"Gotham Light";
				src:url("../fonts/Gotham_Book.ttf") format("truetype");
			    font-weight: normal;
			    font-style: normal;
			}
		/* Uso general */
			*{font-family: "Gotham", "Museo Sans", "Tahoma", "Verdana", "Arial", "Sans-serif";}
			p{font-family: "Gotham Light", "Museo Sans", "Tahoma", "Verdana", "Arial", "Sans-serif";}
			pre{font-family: monospace;}
		@media (min-width: 640px) {
			.encuadre{
				width: 100%;
				max-width: 1000px;
				margin-right: auto;
				margin-left: auto;
			}
		}
		pre{
			padding: 10px; 
			border: 1px solid rgba(0, 0, 0, 0.75);
			font-family: monospace;
			overflow: scroll;
		}
		@media (min-width: 640px) {
			pre{
				overflow: hidden;
			}
		}
		.codigo-fuente{
			background-color: rgba(200, 150, 0, 0.25);
			border-radius: 4px;
			padding: 10px;
			margin-top: 10px;
			overflow: hidden;

			display: none;
		}
	</style>
	<script type="text/javascript">
	function MostrarCodigo(){
		$('.codigo-fuente').show();
		$('#mostrar-codigo').hide();
	}
	</script>
	<div style="background: linear-gradient(to bottom, #FFD300 0%, #FFBC00 100%); color: rgb(20, 20, 20);">
		<div class="encuadre">
			<div onclick="window.close();" style="width: 60px; padding: 10px; cursor: pointer;">Volver</div>
		</div>
	</div>