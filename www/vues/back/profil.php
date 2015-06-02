<!-- On démarre la session (ceci est indispensable dans toutes les pages de notre section membre) -->

<?php include("../../modele/sessionStart.php"); ?>
<?php include("../../modele/modele.php"); ?>
<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Profil - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>
	
	<body>

		<?php include("../frames/menu.php"); ?>
		
			<?php
				include("../../controleurs/updateController.php");

			// Selection de l'utilisateur et de ses parametres.
			$user = $_SESSION['id'];
			?>

<?php

include("../../controleurs/profilController.php");
afficheprofil($_SESSION['email']);
?>

<div id="profil">
	<div class="profil profil_block" id="affichageProfil">
		<h1>Votre profil</h1>
			<div id="photoProfil">
				<img alt="profil"/><!-- pouvoir cliquer sur l\'image pour la modifier -->
			</div>
			<div class="">
				<ul class="infoProfil">
					<li>Nom : <?php echo strtoupper($_SESSION["nom"]); ?> </li>
					<li>Prénom : <?php echo $_SESSION["prenom"]; ?></li>
					<li>Date de naissance : <?php echo $_SESSION["born"]; echo " "; echo "("; echo $_SESSION['age']; echo " ";echo "ans)"; ?></li>
					<li>Adresse :<br />
					<?php echo $_SESSION["adresse"]; ?><br />
					<?php echo $_SESSION["cdp"]; ?><?php echo " "; ?><?php echo $_SESSION["ville"]; ?></li>
					<li>Téléphone : <?php echo $_SESSION["telephone"]; ?></li>
					<li>Email : <?php echo $_SESSION["email"]; ?></li>
				</ul>
			</div>
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

					<button type="submit" class="button button-block"> Mettre à jour le profil </button>
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