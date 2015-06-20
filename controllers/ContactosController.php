<?php

	class contactosController
	{
		public function indexAction()
		{
			return new View("contactos");
		}
		public function ciudadAction($ciudad)
		{
			exit("xD".$ciudad);
		}
	}
