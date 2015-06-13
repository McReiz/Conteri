<?php
	include('../configuracion/config.php');

	$upload_file = archivos . basename['userfile']['name'];

	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file)) {
		echo "File is valid, and was successfully uploaded.\n";
	} else {
		echo "Possible file upload attack!\n";
	}