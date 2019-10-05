<?php  
	session_start();

	if (isset($_SESSION['username'])) {

		setcookie('username', '', time()-3600); // supression du cookie
		session_destroy();

	}

	header('Location: login.php');
	
?>