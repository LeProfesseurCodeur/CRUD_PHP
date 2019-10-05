<?php 
	require_once('db/dbconf.php');
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM account WHERE username = '$username'";
	
	$result = $db->query($sql);

	while ($row = $result->fetch_object()) { // Retourne la ligne courante d'un jeu de résultat sous forme d'objet
		$id = $row->id;
		$fullName = $row->fullName;
		$profilePic = $row->profilePic;
	}

 ?>