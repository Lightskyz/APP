<!-- On démarre la session (ceci est indispensable dans toutes les pages de notre section membre) -->

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
			$user = $_SESSION['id'];
			?>

			<?php

// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['mdp'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo '<div id="bienvenue">Votre email est '.$_SESSION['email'].' et votre mot de passe est '.$_SESSION['mdp'].' et votre identifiant est.'.$_SESSION['id'].'.</div>';
	echo '<br />';
	
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>

<div id="profil">
	<div class="profil profil_block" id="affichageProfil">
		<h1>Votre profil</h1>
			<div id="photoProfil">
				<img />
			</div>
			<div class="">
				<ul class="infoProfil">
					<li>Nom : RAKOTOZAFY</li>
					<li>Prénom : Antoine</li>
					<li>Date de naissance : 14/12/1994 (20 ans)</li>
					<li>Adresse :<br />
					26 Rue Raymond Marcheron<br />
					92170 Vanves</li>
					<li>Téléphone : 0686656030</li>
					<li>Email : antoine.rakotozafy@gmail.com</li>
				</ul>
			</div>

	</div>

	<div class="form profil_block" id="modifProfil">
		<h1>Modification du profil</h1>
			<form action="" method="POST">

				<div class="top-row">
					<div class="field-wrap">
		            	<label>			
							Nom
						</label>
						<input type="text" name="nom" size="10">
					</div>

					<div class="field-wrap">
		            	<label>
							Prénom
						</label>
						<input type="text" name="prenom" size="10">
					</div>
				</div> <!-- fin de la div top row -->

					<div class="field-wrap">
		            	<label>
							Adresse
						</label>
						<input type="text" name="adresse" size="10">
					</div>

				<div class="top-row">
					<div class="field-wrap">
		            	<label>
							Code Postal
						</label>
						<input type="text" name="code_postal" size="10">
					</div>

					<div class="field-wrap">
		            	<label>
							Ville
						</label>
						<input type="text" name="ville" size="10">
					</div>
				</div> <!-- fin de la div top row -->

					<div class="field-wrap">
		            	<label>
							Téléphone
						</label>
						<input type="text" name="telephone" size="10">
					</div>

					<div class="field-wrap">
		            	<label>
							Email
						</label>
						<input type="text" name="email" size="10">
					</div>
				
				<div class="top-row">
					<div class="field-wrap">
		            	<label>
							Mot de passe
						</label>
						<input type="text" name="mot_de_passe" size="10">
					</div>

					<div class="field-wrap">
		            	<label>
							Mot de passe (vérif)
						</label>
						<input type="text" name="mot_de_passe_verif" size="10">
					</div>
				</div> <!-- fin de la div top row -->

					<button type="submit" class="button button-block"> Mis à jour du profil </button>
			</form>

			<?php
				updateprofil($user); 
			?>
	</div> <!-- fin de form -->
		<!-- contenu de notre site -->
</div>
		<?php include("../frames/footer.php"); ?>

	</body>

</html>