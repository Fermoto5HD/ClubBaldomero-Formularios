<div class="cover" id="basicasPHP">
	<div class="cover-degrade">
		<div class="encuadre">
			<div class="cover-texto">
			¿PHP? ¿Qué es eso? ¿Se come?
			<div class="cover-texto-parrafo">Te vamos a mencionar algunas básicas de este lenguaje de programación web que te permitirán procesar la información ingresada mediante el formulario de tu web.</div>
			</div>
		</div>
	</div>
</div>
<div class="encuadre">
	<div class="nota">Nota: Si sabés qué es PHP y sabés cómo manejarlo y crear un procesamiento podés saltearte este paso.</div>
	<br />
	<h1>Pregunta obvia: ¿Qué es PHP?</h1>
	<p>PHP es uno de los lenguajes web más utilizados en el momento de crear un sitio web.  </p>
	<p>Con estos datos ingresados se permiten procesar los resultados en múltiples formas, como por ejemplo que un producto esté a la vista de todos, que formen parte de un archivo PDF listo para ser impreso, o que formen parte de un correo a enviarse.</p>
	<br />
	<h1>¿Qué tengo que saber de PHP?</h1>

	<p>En html llamamos a un formulario mediante la etiqueta &ltform&gt con su correspondiente cierre con &lt/form&gt. </p>
	<p>Todos los elementos que estén dentro de esas etiquetas formarán parte de dicho formulario. </p>
	<pre>&lt;form action="correode@ejemplo.com" method="post" enctype="text/plain"&gt;&lt;/form&gt;</pre>
	<p>Como toda etiqueta en html tiene sus atributos para diferenciar un form de otro. </p>
	<br />

	<h1>¿Cómo se maneja sintácticamente? </h1>
		<h2>Cierre de líneas</h2>
		<p>En PHP cada línea se debe de cerrar con un ";". </p>
		<br />

		<h2>Variables: declaración y asignación</h2>
		<p>En PHP las variables se definen anteponiendo un "$" antes del nombre de la variable. </p>
		<p>Para asignarle un valor sea numérico o textual (entre comillas) sólo tenés que igualarlo. </p>
		<pre>&lt;?php 
	$var1 = "variable 1"; 
	$var2 = "variable 2"; 
?&gt;</pre>
		<br />

	<h1>Funciones básicas que tenés que saber en PHP </h1>
		<h2>echo</h2>
		<p>Lo que hace "echo" es imprimir algo en la página, desde una variable, pasando por una función matemática, hasta un simple texto entre comillas. </p>
		<pre>&lt;?php 
	$var1 = "variable1"; 
	echo $var1; 
	echo 45+5;
	echo "Frase que se imprime mediante PHP"; 
?&gt;</pre>
		<br />

		<h2>isset(variable)</h2>
		<p>Lo que hace esta función es verificar si la variable no se encuentra vacía. </p>
		<p>Esta función devuelve un valor booleano, es decir, verdadero o falso. </p>
		<p>Si no se encuentra vacía devolverá verdadero, de lo contrario devolverá falso. </p>

		<pre>&lt;?php 
	$var1 = "variable a"; 
	$var2 = "variable b"; 

	//Con var_dump mostramos si es verdadero o falso el isset de ambas variables.
	var_dump(isset($var1));      // TRUE (Verdadero) 
	var_dump(isset($var1, $var2)); // TRUE (Verdadero) 
?&gt;</pre>
		<br>
		<!--<center><a href="ejemplos/ejemplo-get.php" target="_blank"><button>Ver ejemplo</button></a></center>-->
		<br>
		<h2>die()</h2>
		<p>Lo que hace esta función es cortar la ejecución del código. Lo que sigue después del "die();" no lo ejecutará. </p>
		<p>Es útil en caso de querer mostrar un error después de un if. </p>
		<br><br>

		<h2>mail($destinatario, $asunto, $cuerpodelcorreo, $correosadicionales);</h2>
		<p>Esta función será útil para cuando necesites enviar un correo. </p>
		<div class="cuadro-ejemplo">
		Aquí hay un ejemplo más detallado de su uso: 
			<pre>&lt;?php
$destinatario       = 'correodeldestinatario@ejem.plo';
$asunto             = 'El título';
$cuerpodelcorreo    = 'Hola';
$correosadicionales = 'From: correodeorigen@ejem.plo' . "\r\n" .
    'Reply-To: correoderespuesta@ejem.plo' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($destinatario, $asunto, $cuerpodelcorreo, $correosadicionales);
?&gt;</pre>
		</div>
		<br><br>



	<hr>
	<h1>¿Qué aprendí?</h1>
	<p>Hasta acá ya aprendiste lo básico de la sintáxis de PHP, el uso de variables y un par de funciones sencillas. </p>
	<p>Además te dimos la función "mail(...)", la cual te servirá al momento de realizar un envío de correo, sea de confirmación de una cuenta, o por un mensaje que envíen desde tu sitio. </p>
	<p>En el siguiente apartado vamos a combinar todo lo aprendido para hacer un formulario de contacto básico y sencillo. </p>
	<center><button onclick="Ejemplo()">Siguiente apartado: Armando un formulario</button></center>
</div>