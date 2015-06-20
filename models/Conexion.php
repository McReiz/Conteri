<?php
	class Conexion
	{
		/************************
		private   = solo tú, 
		protected = tú y tus descendientes, 
		public    = cualquiera.

		Es una buena práctica declarar todas
		las propiedades que se usen dentro de
		la clase.
		**********************************/

		//Propiedades
		protected $server = "localhost";
		protected $user   = "root";
		protected $pass   = "";
		protected $db     = "conteri";
		protected $conectar;
		protected $consulta;


		//Métodos
		public function __construct()
		{
			//Apuntamos con $this-> a las variables de arriba
			$this->conectar = New mysqli($this->server,$this->user,$this->pass,$this->db);

			if($this->conectar->connect_errno) 
	        { 
	            exit("¡Ha ocurrido un problema al intentar conectar a MySQL!"); 
	        } //Si no hay error al conectar entonces se devuelve la conexión
	       	return $this->conectar;
		}

		public function Request($query)
		{
			/*
			Se realiza la consulta
			y de paso se devuelve las filas afectadas
			en la consulta.
		    por eso hay que separar las consultas de creacion, de las demás.
			*/
			$consulta = $this->conectar->query($query);
			return $consulta->fetch_assoc();

		}
		public function CreateTable($name)
		{
			return $this->conectar->query(
					"CREATE TABLE $name (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					user VARCHAR(40) NOT NULL,
					pass VARCHAR(30) NOT NULL,
					email VARCHAR(50) NOT NULL,
					files VARCHAR(80000),
					reg_date TIMESTAMP
					)");	
		}
		public function DeleteTable($name)
		{

		}
	}