<?php 

	/*
	|-------------------------------------------------------------------
	|   Términos de programación y demás.
	|-------------------------------------------------------------------
	|   Lógica de programación y Lógica de presentación
	|	Refactorizar == Mejorar un Código u optimizarlo.
	|	require lanza error warning si no se encuentra el archivo.
	|	La encapsulación es un mecanismo que consiste en organizar datos y métodos 
	|   de una estructura, conciliando el modo en que el objeto se implementa, 
	|   es decir, evitando el acceso a datos por cualquier otro medio 
	|   distinto a los especificados. Por lo tanto, la encapsulación garantiza 
	|   la integridad de los datos que contiene un objeto.
	|   Desde dentro de la función no se puede acceder a las variables 
	|   que están por fuera de la misma.
	|   Reusabilidad.
	|  	Separación de enfoques
	|   Frontend controller; Se encarga de configurar nuestra aplicación.
	*/

	class homeController
	{
		public function indexAction()
		{
			return new View("home",["title" => "Liceo Cabo Santa Maria"]);
		}
		
	}