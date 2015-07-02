<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>
</head>
<body>
	<div class="encuadre">
		<div style="padding: 10px;">
			<h1>Ejemplo de Submit</h1>
			<p>Este ejemplo te ayudará a entender el funcionamiento de input type="submit". </p>
			<p>Si querés podés cambiar los datos de los campos. </p>
			<br>
			<form action="ejemplo-submit-procesado.php" method="GET">
				<input type="text" name="campo1" value="sarasa"><br />
				<input type="text" name="campo2" value="caraza"><br />
				<input type="text" name="campo3" value="balanza"><br />
				<input type="submit" value="Enviar información"><br />
			</form>
			<p>Clickeá en "Enviar información" y en la siguiente pantalla verás el resultado. </p>
		</div>
	</div>
</body>
</html>