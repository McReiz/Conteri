<?php 
	
	//para que el texto no contenga caracteres especiales que puedan jodernos
	class filtreoTexto{

		private $_texto;

		public function __construct($texto){
			$this->_texto = $texto;
		}

		private function setName($text){
			 
			$text = trim($text); // quita los espacio de al principio y del final

			$buscar = array('/', '\\', ':', '*', '?', '<', '>','|');
			$text = str_replace($buscar, "", $text);

			$buscar = "/[\s,]+/";
			$text = preg_replace($buscar, " ", $text);
			
			$buscar = array('\r\n', '\n'); 
			$text = str_replace($buscar, '-', $text);

			$text = htmlentities($text);
			return $text;
		}
		public function getName(){
			return $this->setName($this->_texto);
		}
		public function __destruct(){
			
		}
	}
?>