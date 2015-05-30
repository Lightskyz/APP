<?php include("/modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Profil - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>
	
	<body>

		<?php include("../frames/menu.php"); ?>
		
			<?php
				include("/controleurs/updateController.php");

			// Selection de l'utilisateur et de ses parametres.
			$user = 1;				
			?>

			<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['mdp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['mdp'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="/controleurs/deconnexionController.php">Déconnexion</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>
				<form action="" method="POST">
					Modification de votre nom : </br>
				<input type="text" name="nom" placeholder="nom" size="10"></br></br>
					Modification de votre prenom : </br>
				<input type="text" name="prenom" placeholder="prenom" size="10"></br></br>
					Modification de votre adresse : </br>
				<input type="text" name="adresse" placeholder="adresse" size="10"></br></br>
					Modification de votre code postal : </br>
				<input type="text" name="code_postal" placeholder="code postal" size="10"></br></br>
					Modification de votre ville : </br>
				<input type="text" name="ville" placeholder="ville" size="10"></br></br>
					Modification de votre telephone : </br>
				<input type="text" name="telephone" placeholder="telephone" size="10"></br></br>
					Modification de votre email : </br>
				<input type="text" name="email" placeholder="email" size="10"></br></br>
					Modification de votre mot de passe : </br>
				<input type="text" name="mot_de_passe" placeholder="mot de passe" size="10"></br></br>
					Vérification de votre mot de passe : </br>
				<input type="text" name="mot_de_passe_verif" placeholder="" size="10">
				<input type="submit" value="Ok">
				</form>

			<?php
				updateprofil($user); 
			?>

		<!-- contenu de notre site -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>