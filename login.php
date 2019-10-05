<?php 
    require_once('header.php');
    require_once('footer.php');

    session_start();
    if(isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
        header('Location: index.php');
    }
?>

<div id="login">
    <div id="head-section">
		<h1 id="site-title">CRUD</h1>
		<h3>Crud fait maison</h3>
		<hr id="headline">

		<form class="form-group" role='form' method="POST" name="loginForm" action="accountLogin.php">
			<label>Nom d'utilisateur</label>
			<input class="form-control" type="text" name="username" autofocus='autofocus' placeholder="Nom d'utilisateur" required>
			<br>
			<label>Mot de passe</label>
			<input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
			<br>
			<button class="btn sign-in" type="submit" name="sign-in">Se connecter</button>
			<a href="signUp.php">
				<button class="btn sign-up" type="button" name="sign-up">S'inscrire</button>
			</a>
		</form>
	</div>
</div>