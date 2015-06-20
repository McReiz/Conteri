<?php 
	
	// Parámetros opcionales $vars = array()
	function view($template, $vars = array())
	{
		extract($vars); //Extraer datos y convertir a variables individuales.
		require "views/$template.tpl.php";
	}

	function controller($name)
	{
		if(empty($name)){$name = "home";}
		$file = "controllers/$name.php";
		if(file_exists($file)) //Comprobando si existe el controlador
		{
			require $file;
		}
		else
		{
			header("HTTP/1.0 404 Not Found");
			exit("P&aacute;gina no encontrada :c");
		}
	}