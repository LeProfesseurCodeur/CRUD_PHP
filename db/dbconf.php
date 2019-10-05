<?php
	define("HOST_NAME", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "");
	define("DB_NAME", "note");

	$db = new mysqli('localhost', 'root', 'root', 'note');

	if ($db->connect_error) {
		echo "Error: Connection)";
	}	
?>