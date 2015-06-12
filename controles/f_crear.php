<?php 
	include('../configuracion/config.php');
	function crear()
	{
		$nombre = $_POST["nombre"];
		$tipo   = $_POST["tipo"];
		($tipo == "html") ? $tipo = ".html" : $tipo = ".txt";
		$destino = archivos;
		$contenido = $_POST["contenido"];
		$archivofinal = $destino.$nombre.$tipo;
		if(!file_exists($archivofinal)){
			$archivo = fopen($archivofinal,"a");
			fwrite($archivo, $contenido);
			fclose($archivo);

			echo '<span id="resultado" class="success">'.$nombre.$tipo.' ha sido creado sastifastoriamente</span>';

		}else{
			echo '<span id="resultado" class="no-success">¡Ya existe un archivo con el nombre '.$nombre.$tipo.'!';
		}
	}
	if($_POST)
		crear();
