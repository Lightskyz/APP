<?php
session_start();
//On vérifie si nos variables sont bien définies
if (isset($_SESSION['email']) && isset($_SESSION['pass'])) {
	echo'<html>
	<head>
	<title>
	Page membre
	</title>
	</head>
	</html>';
	echo 'Votre email est '.$_SESSION['email'].'';
	echo'Veuillez cliquer <a href="./prout.php">ici</a>';
}
else {
	echo 'FUCK';
}
?>
	