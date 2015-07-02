<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>
</head>
<body>
	<div class="encuadre">
		<div style="padding: 10px;">
			<h1>Ejemplo con GET</h1>
			<p>Este ejemplo te ayudará a entender cómo funciona el envío de información por barra de direcciones. </p>
			<br>
			<p>
			<?php echo(isset($_GET["var1"]))?$_GET["var1"]:'<div>En la barra de direcciones agregá lo siguiente:</div>
			<pre>?var1=texto</pre>
			<p>Luego pulsá "enter" para ver la variable ingresada en la página. </p>
			<p>En "texto" puede ir lo que vos quieras. </p>'; ?></p>
			<p><?php echo(isset($_GET["var2"]))?$_GET["var2"]:''; ?></p>
			<p><?php echo(isset($_GET["var3"]))?$_GET["var3"]:''; ?></p>
			<br>
			<p>Si querés podés ingresar dos "var" más por la barra (var2 y var3). Probalo!</p>
		</div>
	</div>
</body>
</html>