<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>
</head>
<body>
	<div class="encuadre">
		<div style="padding: 10px;">
			<h1>Ejercicio final</h1>
			<br />
			<?php if(isset($_POST['email'])) {
				$destinatario = "tucorreo@debeir.aca";
				$asuntocorreo = "Este va a ser el título del correo que recibirá el destinatario"; 

				if(!isset($_POST['nombre']) ||
					!isset($_POST['apellido']) ||
					!isset($_POST['email']) ||
					!isset($_POST['telefono']) ||
					!isset($_POST['mensaje'])) {
					
					echo "<b>Ocurrió un error y el mensaje no se envió. </b>";
					echo "Por favor volvé y verificá la información que ingresaste en el formulario. ";
				die();
				}
				$cuerpocorreo = "Se ha recibido un comentario realizado desde la página web:\n\n";
				$cuerpocorreo .= "Nombre: " . $_POST['nombre'] . "\n";
				$cuerpocorreo .= "Apellido: " . $_POST['apellido'] . "\n";
				$cuerpocorreo .= "E-mail: " . $_POST['email'] . "\n";
				$cuerpocorreo .= "Teléfono: " . $_POST['telefono'] . "\n";
				$cuerpocorreo .= "Comentarios: " . $_POST['mensaje'] . "\n\n";

				$email = $_POST['email'];

				$correosencabezado = 'From: '.$email."\r\n".
				'Reply-To: '.$email."\r\n" .
				'X-Mailer: PHP/' . phpversion();
				mail($destinatario, $asuntocorreo, $cuerpocorreo, $correosencabezado);
				echo "¡Mensaje enviado!";
			} ?>
			<br /><br />
			<a href="formulario.php"><button>Volver al formulario</button></a><br /><br /><button id="mostrar-codigo" onclick="MostrarCodigo()">Ver código del archivo de procesamiento</button>
			<div class="codigo-fuente">Código fuente: 
			<pre>&lt;?php if(isset($_POST['email'])) {
	$destinatario = "tucorreo@debeir.aca";
	$asuntocorreo = "Este va a ser el título del correo que recibirá el destinatario"; 

	if(!isset($_POST['nombre']) ||
		!isset($_POST['apellido']) ||
		!isset($_POST['email']) ||
		!isset($_POST['telefono']) ||
		!isset($_POST['mensaje'])) {
					
		echo "&lt;b&gt;Ocurrió un error y el mensaje no se envió. &lt;/b&gt;";
		echo "Por favor volvé y verificá la información que ingresaste en el formulario. ";
	die();
	}
	$cuerpocorreo = "Se ha recibido un comentario realizado desde la página web:\n\n";
	$cuerpocorreo .= "Nombre: " . $_POST['nombre'] . "\n";
	$cuerpocorreo .= "Apellido: " . $_POST['apellido'] . "\n";
	$cuerpocorreo .= "E-mail: " . $_POST['email'] . "\n";
	$cuerpocorreo .= "Teléfono: " . $_POST['telefono'] . "\n";
	$cuerpocorreo .= "Comentarios: " . $_POST['mensaje'] . "\n\n";

	$email = $_POST['email'];

	$correosencabezado = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($destinatario, $asuntocorreo, $cuerpocorreo, $correosencabezado);
	echo "¡Mensaje enviado!";
} ?&gt;</pre>
			</div>
		</div>
	</div>
</body>
</html>