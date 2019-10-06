<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM members WHERE id = '".$_GET['id']."'";
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Utilisateur supprimé avec succès' : 'Une erreur s\'est produite. Impossible de supprimer l\'utilisateur...';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Sélectionnez un membre pour supprimer';
	}
	header('location: index.php');
?>