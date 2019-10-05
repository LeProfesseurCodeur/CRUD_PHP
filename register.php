<?php

    require_once('db/dbconf.php');
    require_once('salt.php');
    require_once('header.php');
    require_once('footer.php');

    if(isset($_POST['username']) && $_POST['username'] != '') {
        $fullName = $_POST['fullName'];
		$gender   = $_POST['gender'];
		$username = $_POST['username'];
		$password = crypt($_POST['password'], KEY_SALT);
		$profilePic = '';

		$sql = "INSERT INTO account (fullName, username, password, gender, profilePic) VALUES ('$fullName', '$username', '$password', '$gender', '$profilePic')";
		$result = $db->query($sql);

		if ($result) {

			if (isset($_FILES['profilePic'])) {
				$uploadDir = 'db/profilePic/';//chemin photo de profile
				$fileTmpName = $_FILES['profilePic']['tmp_name']; //nom temporaire qui sera chargé sur la machine serveur
				$fileExtension = pathinfo($_FILES['profilePic']['name'])['extension'];
				$fileName = time().".$fileExtension";//retourne l'heure courante
				$target = $uploadDir.$fileName;

				// Vérification de la taille du fichier upload
				if ($fileSize <= 5242880) { // 5MB = 5242880
					if (in_array($fileExtension, ['jpg', 'png'])) { //in_array indique si la valeur appartient au tableau
						if (move_uploaded_file($fileTmpName, $target)) { //Déplace un fichier téléchargé
							$profilePic = $target;
						}
					}
				}
			}
			
			$sql = "UPDATE account SET profilePic = '$profilePic' WHERE username = '$username'";
			echo $picProfile;
			$addImage = $db->query($sql);

			if ($addImage) {
				header('Location: login.php');
			}
		}
    }
?>