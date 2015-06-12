<?php 
	$config = array();

	//servirdor
	$config[0] = ""; //server
	$config[1] = ""; //db users
	$config[2] = ""; //db pass
	$config[3] = ""; //database name
	//directorios
	$config[4] = "C:/xampp/htdocs/Conteri/"; //directorio root
	$config[5] = "http://localhost/Conteri/"; // url del sitio debe terminar en "/"

	define("vista", $config[4]."vista/");
	define("controles", $config[4]."controles/");
	define("archivos",$config[4]."archivos/");
	
	define("vista_url", $config[5]."vista/");
	define("controles_url", $config[5]."controles/");
?>