<main>
	<div class="cover" id="elementos">
		<div class="cover-degrade">
			<div class="encuadre">
				<div class="cover-texto">
				Cajas de texto, selectores, radios...
				<div class="cover-texto-parrafo">Los distintos elementos que forman parte de un formulario en HTML.</div>
				</div>
			</div>
		</div>
	</div>
	<article class="encuadre">
		<h1>¿Qué puedo poner en un formulario?</h1>
		<p>En un formulario podemos poner distintos elementos y formas de ingresar información en una página web. Ya sean cuadros de texto, botones, menúes, listas, entre otros. </p>
		<br>
		<h1>La etiqueta &ltinput&gt para los campos de texto</h1>

		<p>Si el usuario tiene que ingresar texto, tendremos que usar la etiqueta &ltinput&gt. </p>
		<p>Esta etiqueta nos permitirá utilizar cajas de texto con distintas particularidades según el caso. Esta etiqueta no sólo se usa para el ingreso de texto, también para ingresar imágenes o seleccionar valores, pero eso lo profundizaremos más adelante. </p>
		<div class="cuadro-ejemplo">Este es el ejemplo de uno de los distintos usos de esta etiqueta: 
			<pre>&lt;input type="email" name="correo"&gt;&lt;/input&gt;</pre>
		</div>
		<p>A continuación te detallamos los valores de esos dos atributos que mencionamos en ese ejemplo. </p>
		<br>

		<h1>Los distintos atributos de la etiqueta &ltinput&gt</h1>
			<h2>type="text"</h2>
				<p>El elemento tomará forma de una caja de texto y permite el ingreso de texto en el mismo. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="text"></input>
				<br><br>

			<h2>type="number"</h2>
				<p>Lo mismo que text, pero preparado especialmente para el ingreso de números. </p>
				<p>Este tipo de input se evidencia más en los dispositivos Android, mostrando un teclado numérico. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="number"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="number"></input>
				<br><br>

			<h2>type="email"</h2>
				<p>Lo mismo que text pero preparado especialmente para el ingreso de direcciónes de correo. </p>
				<p>Este tipo de input se evidencia más en los dispositivos Android, mostrando el teclado con el agregado de "@" en el mismo. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="email"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="email"></input>
				<br><br>

			<h2>type="password"</h2>
				<p>Lo mismo que text, con la gran diferencia que este se usará para las contraseñas ya que codificará la visibilidad de los caracteres ingresados. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="password"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="password"></input>
				<br><br>

			<h2>size="tamaño de la caja"</h2>
				<p>Este atributo permite establecer el tamaño de la caja. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text" size="40"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="text" size="40"></input>
				<br><br>

			<h2>maxlength="límite de caracteres"</h2>
				<p>Este atributo permite establecer un límite de caracteres a ingresar. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text" maxlength="10"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="text" maxlength="10"></input>
				<br><br>

			<h2>value="texto ya escrito"</h2>
				<p>Este atributo permite dejar un texto pre-escrito en el cuadro. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text" value="texto ya escrito"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="text" value="texto ya escrito"></input>
				<br><br>

			<h2>placeholder="¿De qué trata el cuadro?"</h2>
				<p>Parecido al anterior pero con la diferencia que al momento de ingresar los valores, el texto del placeholder desaparece, a menos que el campo vuelva a estar vacío. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text" placeholder="¿De qué trata el cuadro?"&gt;&lt;/input&gt;</pre></div>
				<p>El resultado: </p>
				<input type="text" placeholder="¿De qué trata el cuadro?"></input>
				<br><br>

			<h2>name="nombre-identificatorio-del-input"</h2>
				<p>Esto no es visual pero es muy útil cuando debamos diferenciar los campos de un dato con otro, en especial cuando tenemos que procesar estos datos. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: <pre>&lt;input type="text" name="nombre-del-cuadro"&gt;&lt;/input&gt;</pre></div>
				<br><br>

		<h1>Usando &lttextarea&gt para ingresar textos de gran cantidad. </h1>
			<p>Esta etiqueta es una vaiante de &ltinput type="text"&gt y permite ingresar grandes cantidades de texto dentro de un formulario, e incluso permite al usuario alterar el tamaño de la caja de texto. </p>
			<p>Nos trae dos atributos opcionales y modificables:</p>
				<ul>
					<li>cols="cantidad de columnas de texto visibles"</li>
					<li>rows="cantidad de filas de texto visibles"</li>
				</ul>
				<div class="cuadro-ejemplo">
					Ejemplo de código: 
						<pre>&lt;textarea name="mensaje" cols="30" rows="50"&gt;&lt;/textarea&gt;</pre>
				</div>

		<h1>Usando &ltinput&gt para seleccionar datos predeterminados</h1>
			<h2>Selección única: type="radio"</h2>
				<p>Los "radio" nos permitirán establecer valores no modificables, de selección obligatoria y con la particularidad que deberá seleccionarse una sóla opción de las dispuestas. </p>
				<p>Para que los "radio" puedan convivir mejor entre un grupo de "radios" con otro se deberán especificar el nombre de los radio (name="seccion1" como ejemplo) y luego agregar el valor interno del input (value="valor1"). </p>
				<div class="cuadro-ejemplo">
					Ejemplo de código: 
				<pre>&lt;p&gt;Sección 1&lt;/p&gt;
	&lt;input type="radio" name="seccion1" value="valor1"&gt;valor1&lt;br /&gt;
	&lt;input type="radio" name="seccion1" value="valor2"&gt;valor2&lt;br /&gt;
	&lt;input type="radio" name="seccion1" value="valor3"&gt;valor3&lt;br /&gt;
&lt;p&gt;Sección 2&lt;/p&gt;
	&lt;input type="radio" name="seccion2" value="valor1"&gt;valor1&lt;br /&gt;
	&lt;input type="radio" name="seccion2" value="valor2"&gt;valor2&lt;br /&gt;
	&lt;input type="radio" name="seccion2" value="valor3"&gt;valor3&lt;br /&gt;</pre>
				</div>
				<p>El resultado: </p>
				<p>Sección 1</p>
				<input type="radio" name="seccion1" value="valor1">valor1 <br />
				<input type="radio" name="seccion1" value="valor2">valor2 <br />
				<input type="radio" name="seccion1" value="valor3">valor3 <br />
				<p>Sección 2</p>
				<input type="radio" name="seccion2" value="valor1">valor1 <br />
				<input type="radio" name="seccion2" value="valor2">valor2 <br />
				<input type="radio" name="seccion2" value="valor3">valor3 <br />
				<br><br>

			<h2>Selección múltiple: type="checkbox"</h2>
				<p>El elemento tomará forma de una caja de selección de archivos, compuesto por un botón para buscar el archivo y al lado el nombre del archivo seleccionado. </p>
				<div class="cuadro-ejemplo">
					Ejemplo de código: 
					<pre>&lt;input type="checkbox" name="seccion3" value="valor1"&gt;&lt;/input&gt;&lt;br /&gt;
&lt;input type="checkbox" name="seccion3" value="valor2"&gt;&lt;/input&gt;&lt;br /&gt;
&lt;input type="checkbox" name="seccion3" value="valor3"&gt;&lt;/input&gt;&lt;br /&gt;</pre>
				</div>
				<p>El resultado: </p>
				<div style="text-align: left;">
				<input type="checkbox" name="seccion3" value="valor1">Valor1</input><br />
				<input type="checkbox" name="seccion3" value="valor2">Valor2</input><br />
				<input type="checkbox" name="seccion3" value="valor3">Valor3</input><br />
				</div>
				<br><br>

		<h1>Usando &ltinput&gt para insertar archivos</h1>
			<h2>type="file"</h2>
				<p>El elemento tomará forma de una caja de selección de archivos, compuesto por un botón para buscar el archivo y al lado el nombre del archivo seleccionado. </p>
				<div class="cuadro-ejemplo">
					Ejemplo de código: <pre>&lt;input type="file"&gt;&lt;/input&gt;</pre>
				</div>
				<p>El resultado: </p>
				<input type="file"></input>
				<br><br>

		<h1>&ltinput&gt para submitear y limpiar formularios</h1>
		<p>En ambos tomará forma de botón, pero harán dos funciones distintas. </p>
			<h2>type="submit"</h2>
				<p>"submit" realizará la acción que esté definida en "form". Es decir, si en form le señalamos un action="contacto-envio.php", al hacer click en este botón realizará el envío de la información (sea por GET o por POST) hacia el action definido en el form, es decir "contacto-envio.php". </p>
				<div class="cuadro-ejemplo">
					Ejemplo de código: <pre>&lt;input type="submit"&gt;&lt;/input&gt;&lt;br /&gt;
&lt;input type="submit" value="Enviar información"&gt;&lt;/input&gt;</pre>
				</div>
		<center><a href="ejemplos/ejemplo-submit.php" target="_blank"><button>Ver ejemplo</button></a></center>
				<br><br>
			<h2>type="reset"</h2>
				<p>En cambio, reset limpiará todos los campos del formulario. </p>
				<p>Aclaración: No funcionará el limpiado de campos en los campos que contengan un value inicial. </p>
				<div class="cuadro-ejemplo">Ejemplo de código: 
				<pre>&lt;input type="text" name="campo1"&gt;&lt;br /&gt;
&lt;input type="text" name="campo2"&gt;&lt;br /&gt;
&lt;input type="text" name="campo3"&gt;&lt;br /&gt;
&lt;input type="text" name="campo4" value="valor4"&gt;&lt;br /&gt;</pre>
				</div>
				<p>El resultado: </p>
				<form action="pagina.php" method="post">
					<input type="text" name="campo1"><br />
					<input type="text" name="campo2"><br />
					<input type="text" name="campo3"><br />
					<input type="text" name="campo4" value="valor4"><br />
					<input type="reset">
				</form>
				<br><br>


		<hr>
		<h1>¿Qué aprendí?</h1>
		<p>Acá aprendiste cómo usar los distintos elementos que podés encontrar en cualquier formulario en Internet, desde un cuadro de texto pasando por un listado de opciones, hasta llegar a un botón que permite realizar una acción determinada. </p>
		<p>Perfecto, ya sabés cómo armar un formulario, pero aún no procesa nada y sólo con colocar los campos de texto y un par de botones no alcanza. </p>
		<p>En el siguiente apartado te vamos a enseñar las básicas de PHP, un lenguaje de programación web que nos permitirá procesar la información ingresada mediante los formularios. </p>
		<center><button onclick="BasicasPHP()">Siguiente apartado: Procesando con PHP</button></center>
	</article>
</main>