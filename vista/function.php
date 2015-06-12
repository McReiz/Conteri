<?php 
	define("url", $config[5]);
	function url_type($type,$archive,$version = ""){

		if($version == ""){
			$version = "1.0";
		}
		
		if($type == "img"){
			?>
				<img src="<?php echo url.'vista/img/'.$archive.'?v='.$version; ?>">
			<?php
		}elseif($type == "css"){
			?>
				<link rel="stylesheet" type="text/css" href="<?php echo url.'vista/css/'.$archive.'?v='.$version; ?>">
			<?php
		}elseif($type == "js"){
			?>
				<script type="text/javascript" src="<?php echo url.'vista/js/'.$archive.'?v='.$version; ?>"></script>
			<?php
		}else{
			echo "el tipo ".$type." no existe";
		}
	}
?>