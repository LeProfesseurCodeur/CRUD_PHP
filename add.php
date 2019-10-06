<?php

    session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$stmt = $db->prepare("INSERT INTO members (firstname, lastname, address) VALUES (:firstname, :lastname, :address)");
			$_SESSION['message'] = ( $stmt->execute(array(':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'] , ':address' => $_POST['address'])) ) ? 'Ajout d\'un utilisateur' : 'Impoosible d\'ajouter un membre';	
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Merci de remplir le formualire !';
	}
	header('location: index.php');

?>