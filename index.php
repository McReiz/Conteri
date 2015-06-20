<?php 
	//Base de datos
	require "config.php";
	require "models/Conexion.php";
	require "helpers.php";
	//Librerías
	require "library/Request.php";
	require "library/Inflector.php";
	require "library/Response.php";
	require "library/View.php";

	$conexion = New Conexion();
	// $conexion-CreateTable("jelou");
	$consulta = $conexion->Request("SELECT * FROM users");

	// Llamar al controlador indicado.
	if(empty($_GET["url"]))
	{
		$url = "";
	}
	else 
	{
		$url = $_GET["url"];
	}
	$request = new Request($url);
	$request->execute();
	// Reizon dejo su marca aquí!