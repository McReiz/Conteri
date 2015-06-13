<?php 
	include('../configuracion/config.php');
	include('../configuracion/classes.php');
	function crear()
	{
		$er_nombre = $_POST["nombre"];
		$filtreoTexto = new filtreoTexto($er_nombre);
		$nombre = $filtreoTexto->getName();
		$tipo  = $_POST["tipo"];
		($tipo == "html") ? $tipo = ".html" : $tipo = ".txt";
		$destino = archivos;
		$contenido = $_POST["contenido"];
		$archivofinal = $destino.$nombre.$tipo;
		if(!$er_nombre == ""){
			if(!file_exists($archivofinal)){
				$archivo = fopen($archivofinal,"a");
				fwrite($archivo, $contenido);
				fclose($archivo);

				echo '<span id="resultado" class="success">'.$nombre.$tipo.' ha sido creado sastifastoriamente</span>';

			}else{
				echo '<span id="resultado" class="no-success">¡Ya existe un archivo con el nombre '.$nombre.$tipo.'!';
			}
		}else{
			echo '<span id="resultado" class="no-success">¡debe colocar un nombre a su archivo!';
		}
	}
	if($_POST)
		crear();
