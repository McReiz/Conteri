<?php 
	//Manejo de errores
	ini_set("display_errors", true);
	error_reporting(E_ALL);
	//Configuración del sistema
	$config = array(
		//Base de datos
		 "server" => "localhost",
		 "user"   => "root",
		 "pass"   => "",
		 "db"     => "conteri",
		 //Ubicación
		 "url"    => "http://localhost/ConteriV2/",
		 "dirRoot" => "C:/xampp/htdocs/ConteriV2/"
  		);

	//Constantes
	define("CSS", $config["url"]."views/css/estilos.css");
	define("IMG", $config["url"]."views/img/");
	define("VIEWS", $config["url"]."views/");
	define("CONTROLLERS", $config["dirRoot"]."controlles/");