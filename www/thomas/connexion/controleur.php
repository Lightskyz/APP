<?php
$success = 'Vous êtes connecté :)';
$erreur = 'Le couple email/mot de passe ne correspond pas.';
$erreur1 = 'Vous n\'avez pas rempli tous les champs.';

if (!empty($_POST['email']) && !empty($_POST['pass'])) {
	$email =($_POST['email']);
	$pass = sha1($_POST['pass']);
	$req = $bdd->prepare('SELECT id FROM user WHERE email = :email AND pass = :pass');
                $req->execute(array(
                    'email' => $email,
                    'pass' => $pass));
                $resultat = $req->fetch();
if(!$resultat) {
	echo $erreur;
	echo'<br>Veuillez cliquer <a href="./index.php">ici</a></br>.';
}
else {
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['pass'] = sha1($_POST['pass']);
	echo $success;
	header('location: membre.php');
	
}
}
else {
	echo $erreur1;
	echo'Veuillez cliquer <a href="./index.php">ici</a><br />';
	
}
//if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
	//$email =($_POST['email']);
	//$pass = sha1($_POST['pass']);
	//$req = $bdd->prepare('SELECT id FROM user WHERE email = :email AND pass = :pass');
                //$req->execute(array(
                    //'email' => $email,
                    //'pass' => $pass));
                //$resultat = $req->fetch();
				//PDO:null;
//if(!resultat) {
	//echo $erreur.
	//'<br>Veuillez cliquer <a href="./controleur.php">ici</a></br>.';
//}

//else {
	//$_SESSION['email'] = $_POST['email'];
	//$_SESSION['id'] = $data['id'];
	//echo $success;
	
//}
//}
?>
	