<html lang="es-uy">
<head>
	<meta charset="utf-8" />
	<title>Conteri</title>
	<link rel="stylesheet" href="css/estilos.css" />
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><button id="crear">Crear documento</button></li>
			</ul>
		</nav>
	</header>
	<section id="formularios">
		<form id="formCrear">
			<legend>Crear Documento</legend>
			<div>
				<label>Nombre: </label>
				<input type="text" placeholder="Probando" />
			</div>
			<div>
				<div><label>Tipo de Documento: </label></div>
				<div class="inline-block">
					<label>html</label>
					<input type="radio" value="html" name="tipo">
				</div>
				<div class="inline-block">
					<label>texto</label>
					<input type="radio" value="txt" name="tipo">
				</div>
				<div>
					<div><label>Primer contenido (Opcional)</label></div>
					<div><textarea placeholder="probando"></textarea></div>
				</div>
				<div>
					<input type="submit" value="Crear Documento" />
				</div>
			</div>
		</form>
	</section>
	<section id="menu">
			<span id="pico"></span>
			<ul>
				<li><button><span><img src="img/modificararchivo.svg"></span>Modificar</button></li>
				<li><button><span><img src="img/renombrararchivo.svg"></span>Renombrar</button></li>
				<li><button><span><img src="img/tipoarchivo.svg"></span>Cambiar tipo de Archivo</button></li>
				<li><button><span><img src="img/borrararchivo.svg"></span>Borrar</button></li>
			</ul>
		</section>
	<section id="archivos">
		
		<section>
			<article data-tipo-archivo="texto" data-archivo-id="1">
				<input type="checkbox" checked="cheked" />
				<img src="img/archivo-texto.svg">
				<div>
					<input type="text" value="Nombre Archivo.txt" />
				</div>
			</article>
			<article data-archivo="texto" data-archivo-id="2">
				<input type="checkbox" checked="cheked" />
				<img src="img/archivo-html.svg">
				<div>
					<input type="text" value="código.html" />
				</div>
			</article>
		</section>
	</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>