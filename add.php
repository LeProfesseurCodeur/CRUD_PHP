<?php

    session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$stmt = $db->prepare("INSERT INTO members (firstname, lastname, address) VALUES (:firstname, :lastname, :address)");
			$_SESSION['message'] = ( $stmt->execute(array(':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'] , ':address' => $_POST['address'])) ) ? 'Miembro agregado correctamente' : 'Something went wrong. Cannot add member';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//cerrar conexión
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up add form first';
	}

	header('location: index.php');

?>