<?php
	include('../configuracion/config.php');

	if(!empty($_FILES)){
		$tempFile = $_FILES['file']['tmp_name']; 

		move_uploaded_file($tempFile, archivos);
	}