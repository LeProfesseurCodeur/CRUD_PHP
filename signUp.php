<?php  
	require_once('header.php');
	require_once('footer.php');
?>

<div id="login">
	<div id="head-section">
		<h1 id="site-title">CRUD</h1>
		<h3>CRUD fait maison</h3>

		<hr id="headline">

		<h3>S'enregistrer</h3>

		<form enctype="multipart/form-data" class="form-group" role='form' method="POST" name="loginForm" action="register.php">
			<label>Votre nom :</label>
			<input class="form-control" type="text" name="fullName" autofocus='autofocus' placeholder="Nom" required>
			<br>

			<label>Vous êtes un(e) :</label>
			<select class="form-control" name="gender">
				<option value="F">Femme</option>
				<option value="M">Homme</option>
			</select>
			<br>

			<label>Nom d'utilisateur :</label>
			<input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur" required>
			<br>

			<label>Mot de passe :</label>
			<input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
			<br>

			<label>Photo de profile :</label>
			<input class="form-control" type="file" name="profilePic">
			<br>

			<button class="btn sign-up" type="submit" name="sign-up">S'inscrire</button>
			<a href="login.php"><button class="btn" type="button" name="cancel">Quitter</button></a>
		</form>
	
	</div>
</div>