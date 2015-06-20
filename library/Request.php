<?php
	// Método es una función dentro de una clase, propiedad es una variable.
	class Request
	{
		protected $url;
		protected $controller;
		protected $defaultController = "home";
		protected $defaultAction = "index";
		protected $params = array();
	
		public function __construct($url) // El método contructor se usa porque se autoejecuta al invocar la clase.
		{
			$this->url = $url;
			$segments = explode("/",$this->getUrl());
			$this->resolveController($segments);
			$this->resolveAction($segments);
			$this->resolveParams($segments);
		}
		//& = Raíz de segmento se pasa por referencia y NO por valor.
		public function resolveController(&$segments)
		{
			$this->controller =  array_shift($segments);
			if(empty($this->controller))
			{
				$this->controller = $this->defaultController;
			}
		}
		public function resolveAction(&$segments)
		{
			$this->action =  array_shift($segments);
			if(empty($this->action))
			{
				$this->action = $this->defaultAction;
			}
		}
		public function resolveParams(&$segments)
		{
			$this->params = $segments;
		}
		public function getUrl()
		{
			return $this->url;
		}
		public function getController()
		{
			return $this->controller;
		}
		public function getControllerClassName()
		{
			// Clases estáticas, tienen un uso genérico. (antipatrón)
			return Inflector::camel($this->getController()) . "Controller";
		}
		public function getControllerFileName()
		{
			return "controllers/" . $this->getControllerClassName() . ".php";
		}
		public function getAction()
		{
			return $this->action;
		}
		public function getActionMethodName()
		{
			return Inflector::lowerCamel($this->getAction()) . "Action";		
		}
		public function getParams()
		{
			return $this->params;
		}
		public function execute()
		{
			$controllerClassName = $this->getControllerClassName();
			$controllerFileName  = $this->getControllerFileName();
			$actionMethodName    = $this->getActionMethodName();
			$params              = $this->getParams();

			if(!file_exists($controllerFileName))
			{
				exit("controlador no existe");
			}
			require $controllerFileName;
			$controller = new $controllerClassName();
			$response = call_user_func_array([$controller,$actionMethodName],$params);
			$this->executeResponse($response);
			
		}
		public function executeResponse($response)
		{
			if($response instanceof Response)
			{
				$response->execute();
			}else
			{
				exit("no válido");
			}
		}
	}