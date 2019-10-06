<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['address'];
			$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Les données ont été mise à jour' : 'Une erreur s\'est produite. Impossible de mettre à jour. :(';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Veuillez remplir le formulaire :)';
	}
	header('location: index.php');
?>