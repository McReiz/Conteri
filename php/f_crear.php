<?php 
	function crear()
	{
		$destino = "../archivos/"
		$archivo = fopen($destino.$nombre,"a");
		fwrite($archivo, $contenido);
	}
	crear();