<!DOCTYPE html>
<html>
<head>
<?php include("header.php"); ?>
</head>
<body>
	<div class="encuadre">
		<div style="padding: 10px;">
			<h1>Ejercicio final</h1>
			<p>Así debería quedar tu formulario. </p>
			<br>
			<p>
			<form action="envio-correo.php" method="POST">
				<input type="text" name="nombre" placeholder="Nombre" required></input><br />
				<input type="text" name="apellido" placeholder="Apellido" required></input><br />
				<input type="email" name="email" placeholder="Correo" required></input><br />
				<input type="number" name="telefono" placeholder="Telefono" required></input><br />
				<textarea name="mensaje" placeholder="Mensaje" required></textarea><br />
				<input type="submit" value="¡Enviar mensaje!"></input>
				<input type="reset" value="Limpiar campos"></input>
			</form>
			<br /><br />
			<button id="mostrar-codigo" onclick="MostrarCodigo()">Ver código del formulario</button>
						<div class="codigo-fuente">Código fuente: 
			<pre>&lt;form action="envio-correo.php" method="POST"&gt;
	&lt;input type="text" name="nombre" placeholder="Nombre" required>&lt;/input&gt;&lt;br /&gt;
	&lt;input type="text" name="apellido" placeholder="Apellido" required>&lt;/input>&lt;br /&gt;
	&lt;input type="email" name="email" placeholder="Correo" required>&lt;/input&gt;&lt;br /&gt;
	&lt;input type="number" name="telefono" placeholder="Telefono" required&gt;&lt;/input&gt;&lt;br /&gt;
	&lt;textarea name="mensaje" placeholder="Mensaje" required&gt;&lt;/textarea&gt;&lt;br /&gt;
	&lt;input type="submit" value="¡Enviar mensaje!"&gt;&lt;/input&gt;
	&lt;input type="reset" value="Limpiar campos"&gt;&lt;/input&gt;
&lt;/form&gt;</pre>
			</div>
		</div>
	</div>
</body>
</html>