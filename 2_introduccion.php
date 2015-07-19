<main>
	<div class="cover" id="introduccion">
		<div class="cover-degrade">
			<div class="encuadre">
				<div class="cover-texto">
				¿Formularios en HTML?
				<div class="cover-texto-parrafo">Introduciendo las etiquetas "form" y su correcto uso en el DOM (Document Object Model).</div>
				</div>
			</div>
		</div>
	</div>
	<article class="encuadre">
		<h1>¿Para qué me sirve un formulario en html?</h1>
		<p>Los formularios en html te sirven para mejorar la interacción entre los usuarios y tu sitio web, ya que permitís el ingreso de datos por parte del usuario hacia el sitio web, ya sea para crearte una cuenta, agregar un producto a la venta o incluso para contactarte con la empresa ante dudas o inquietudes. </p>
		<p>Con estos datos ingresados se permiten procesar los resultados en múltiples formas, como por ejemplo que un producto esté a la vista de todos, que formen parte de un archivo PDF listo para ser impreso, o que formen parte de un correo a enviarse.</p>
		<br>
		<h1>La etiqueta &ltform&gt</h1>

		<p>En html llamamos a un formulario mediante la etiqueta &ltform&gt con su correspondiente cierre con &lt/form&gt. </p>
		<p>Todos los elementos que estén dentro de esas etiquetas formarán parte de dicho formulario. </p>
		<pre>&lt;form action="correode@ejemplo.com" method="post" enctype="text/plain"&gt;&lt;/form&gt;</pre>
		<p>Como toda etiqueta en html tiene sus atributos para diferenciar un form de otro. </p>
		<br>

		<h1>Atributos de la etiqueta form</h1>
		<h2>action</h2>
		<p>Define el destino o acción que tendrá usando la información dentro del form. Se lo puede destinar tanto a un correo: </p>
		<pre>&lt;form action="correode@ejemplo.com" method="post" enctype="text/plain"&gt;&lt;/form&gt;</pre>
		<p>Como a un sitio donde procesará internamente la información para algún propósito: </p>
		<pre>&lt;form action="contacto-envio.php" method="post" enctype="text/plain"&gt;&lt;/form&gt;</pre>
		<br><br>

		<h2>method</h2>
		<p>Nos indica la forma en cómo se enviará la información. Sólo existen dos valores válidos: GET y POST. Si no colocamos el atributo method, por defecto será GET. </p>
		<br>
		<h3>GET</h3>
		<p>Con este método la información se enviará a través de la barra de URL del explorador que estemos usando. </p>
		<p>Esto aparecerá en la barra si se envía con GET: </p>
		<pre>http://www.ejemplo.com/paginadeformulario.php?variable1=dato1&variable2=dato2...&variablex=datox</pre>
		<br>
		<center><a href="ejemplos/ejemplo-get.php" target="_blank"><button>Ver ejemplo</button></a></center>
		<br>
		<h3>POST</h3>
		<p>En cambio con este método se enviará junto con la petición, en otras palabras "por detrás" ya que no usará la barra de URLs sino la acción del formulario como envío. </p>
		<br><br>

		<h2>enctype</h2>
		<p>En este atributo definimos cómo será el formato que enviaremos la información. </p>
		<p>La más común es el "text/plain" traducido al español "texto/plano", es decir texto sin formato alguno.</p>
		<br><br>



		<hr>
		<h1>¿Qué aprendí?</h1>
		<p>Hasta acá ya aprendiste el uso de la etiqueta form, y los tres atributos que nos definen la forma que vamos a usar la información que el usuario ingrese en la web. </p>
		<p>Pero los formularios no servirán de nada si no tenemos por dónde ingresar la información (en especial si lo hacemos por POST). </p>
		<p>En el siguiente apartado trataremos sobre los elementos que se usan en los formularios, como por ejemplo cajas de texto y selectores. </p>
		<center><button onclick="Elementos()">Siguiente apartado: Elementos de formularios</button></center>
	</article>
</main>