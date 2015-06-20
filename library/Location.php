<?php
	class Redirigir {
	public static function route($url)
		{	
			header("Location: $url");
		}
	}