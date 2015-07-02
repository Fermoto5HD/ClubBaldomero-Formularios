<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>
</head>
<body>
	<div class="encuadre">
		<div style="padding: 10px;">
			<h1>Resultado</h1>
			<p>Si te fijás en la barra de direcciones, verás que se enviaron los datos por barra de direcciones que estaban ingresados en los campos de texto de la pantalla anterior. </p>
			<br>
			<p><?php echo(isset($_GET["campo1"]))?$_GET["campo1"]:'Vacío. </p>'; ?></p>
			<p><?php echo(isset($_GET["campo2"]))?$_GET["campo2"]:'Vacío. </p>'; ?></p>
			<p><?php echo(isset($_GET["campo3"]))?$_GET["campo3"]:'Vacío. </p>'; ?></p>
			<br>
			<p>En el siguiente apartado aprenderás a crear una página de procesamiento de datos similar a esta. </p>
			<br />
			<a href="ejemplo-submit.php"><p>Paso anterior</p></a>
		</div>
	</div>
</body>
</html>