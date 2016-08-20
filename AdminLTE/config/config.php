<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'quotes_db');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	$conn  = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_errno()) {
		echo("Failed to connect, the error message is : ". mysqli_connect_error());
		exit();
	}
?>