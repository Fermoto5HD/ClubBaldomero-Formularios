<div class="cover" id="ejemplo">
	<div class="cover-degrade">
		<div class="encuadre">
			<div class="cover-texto">
			¡Armemos un formulario!
			<div class="cover-texto-parrafo">Ahora vamos a aplicar lo aprendido armando un formulario básico de contacto.</div>
			</div>
		</div>
	</div>
</div>
<div class="encuadre">
	<h1>El objetivo</h1>
		<p>Crear este formulario:</p>
		<img src="img/ejercicio.png" />
		<br>

	<h1>¡Vamos a armarlo!</h1>
		<ol>
			<li>Declarar el formulario</li>
				<p>En un documento html o php creamos un formulario que permita enviar la información a un archivo llamado "envio-correo.php" sin mostrarla por el navegador:</p>
				<div class="cuadro-ejemplo"><pre>&lt;form action="envio-correo.php" method="POST"&gt;&lt;/form&gt;</pre></div>
				<br /><br />
	
			<li>Ingresar los campos de texto</li>
				<p>Entre las etiquetas &lt;form&gt; y &lt;/form&gt; vamos a colocar los distintos campos de entrada que tendrá el usuario en el formulario. </p>
				<p>Pensá en qué campos de texto se necesitan casi a menudo en un formulario de contacto.</p>
				<br />
				<p>Recordá que podés revisar las distintas variantes de campos de entrada <span onclick="Elementos()" style="text-decoration: initial; cursor: pointer;">volviendo al paso anterior</span>. </p>
				<div class="cuadro-ejemplo">
				Te debería quedar algo así: 
					<pre>&lt;form action="envio-correo.php" method="POST"&gt;
	&lt;input type="tipo de input a usar" name="nombre-del-campo-a-identificar" required&gt;&lt;/input&gt;
	&lt;input type="tipo de input a usar" name="nombre-del-campo-a-identificar" required&gt;&lt;/input&gt;
&lt;/form&gt;</pre>
				</div>
				<br /><br />
			<li>Botones necesarios</li>
				<p>Dentro del form ingresar dos botones, uno para enviar y otro para reiniciar los campos a valores vacíos. </p>
				<div class="cuadro-ejemplo">
				Te debería quedar algo así: 
					<pre>&lt;form action="envio-correo.php" method="POST"&gt;
	... 
	... 
	&lt;input type="submit"&gt;&lt;/input&gt;
	&lt;input type="reset"&gt;&lt;/input&gt;
&lt;/form&gt;</pre>
				</div>

				<br /><br />
			<li>Crear la página de procesamiento</li>
				<p>Una vez realizado el formulario, creá el archivo "envio-correo.php" y abrilo con el editor. </p>
				<p>Hacemos un condicional que sólo funcionará si en el valor del campo de correo (deberás ver el name ingresado en el campo de correo... acá de ejemplo tomamos name="email") está lleno. </p>
				<div class="cuadro-ejemplo">
					<pre>&lt;?php if(isset($_POST['email'])) {
	... 
} ?&gt;</pre>
				</div>
				<p>Dentro de ese condicional vamos a declarar dos variables, las cuales nos permitirá modificar más fácilmente la dirección del destinatario (pondremos la nuestra) y el asunto del correo que se enviará. </p>
				<div class="cuadro-ejemplo">
					<pre>$destinatario = "tucorreo@debeir.aca";
$asuntocorreo = "Este va a ser el título del correo que recibirá el destinatario";</pre>
				</div>
				<p>Después de declararlas, debajo, pondrás algo similar a esto:  </p>
				<div class="cuadro-ejemplo">
					<pre>if(!isset($_POST['nombre']) ||
!isset($_POST['apellido']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono']) ||
!isset($_POST['mensaje'])) {

echo "&lt;b&gt;Ocurrió un error y el mensaje no se envió. &lt;/b&gt;<br />";
echo "Por favor volvé y verificá la información que ingresaste en el formulario. <br />";
die();
}</pre>
				</div>
				<h4>Pasamos a explicarte</h4>
				<p>Lo que hay al lado de isset es un signo exclamatorio "!". Eso indica "lo contrario de" o "si no es"... por lo que "!isset(...)" se traduce en: "verificar si (...) no tiene valor". </p>
				<p>Los dos "||" significa "o"... si traducimos "if(!isset($_POST['nombre']) || !isset($_POST['apellido']) || ... ... ..." sería "Si el campo nombre no tiene valor, o el campo apellido no tiene valor, o...". </p>
				<p>El "o" actúa como: Si se cumple el primero del total se ejecuta el código, si se hacen dos del total se ejecuta el código, pero si no hay ni un valor que cumpla el condicional no lo correrá. </p>
				<p>Para más información te recomendamos ver el manual de condicionales en PHP.net </p>
				<br />
				<p>El condicional verificará si los valores de esas variables de los campos están vacíos. Si están vacíos dirá que no se envió por un error y detendrá la ejecución del código. </p>
				<p>Si no lo están, salteará esta parte condicional del código </p>
				<br />
				<p>Lo que sigue será lo que aparecerá en el cuerpo del correo a enviar:  </p>
				<div class="cuadro-ejemplo">
					<pre>$cuerpocorreo = "Se ha recibido un comentario realizado desde la página web:\n\n";
$cuerpocorreo .= "Nombre: " . $_POST['nombre'] . "\n";
$cuerpocorreo .= "Apellido: " . $_POST['apellido'] . "\n";
$cuerpocorreo .= "E-mail: " . $_POST['email'] . "\n";
$cuerpocorreo .= "Teléfono: " . $_POST['telefono'] . "\n";
$cuerpocorreo .= "Comentarios: " . $_POST['mensaje'] . "\n\n";</pre>
				</div>
				<p>Lo que se hace en este paso es asignar a una variable el cuerpo del mensaje. </p>
				<p>Modificalo a tu gusto. Podés obviar algunos campos si lo deseás. </p>
				<br />
				<p>Asignamos el campo de correo a una variable, y especificamos un correo (o el mismo) para los correos de encabezado:  </p>
				<div class="cuadro-ejemplo">
					<pre>$email = $_POST['email'];

$correosencabezado = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();</pre>
				</div>
				<p>Y finalmente declaramos la función mail con las variables en el siguiente orden: </p>
				<div class="cuadro-ejemplo">
					<pre>mail($destinatario, $asuntocorreo, $cuerpocorreo, $correosencabezado);</pre>
				</div>
				<br />
				<p>Por supuesto, no te olvides de avisarle al usuario que el correo se envió! </p>
				<div class="cuadro-ejemplo"><pre>echo "¡Mensaje enviado!";</pre></div>
	</ol>

	<p>¡Llegó el momento de la verdad! Abrí la página usando localhost, debe estar en el directorio de páginas de XAMPP/WAMPP o podés subirlo a un hosting gratuito con soporte de PHP. </p>
	<center><a href="ejemplos/formulario.php" target="_blank"><button>Probar el resultado final</button></a></center>

	<hr>
	<h1>¿Qué aprendí?</h1>
	<p>Acá aprendiste cómo crear un formulario básico de contacto usando form, e incorporando varios elementos de entrada de texto. </p>
	<p>También aprendiste a crear una página que procesa la información mediante PHP, uno de los lenguajes de programación web más usados en el mundo. </p>
	<center><button onclick="Fin()">Finalizando: Repaso general</button></center>
</div>