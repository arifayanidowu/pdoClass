<?php
	
	define('DBNAME', 'practice');
	define('DBUSER', 'root');
	define('DBPASS', 'boss123');
	
	try{

	$conn = new PDO("mysql:host=localhost;dbname=".DBNAME, DBUSER, DBPASS);

		/*$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);*/

	} catch(PDOException $err) {
		echo $err->getMessage();

	}

	


?>