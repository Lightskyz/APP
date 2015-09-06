<!-- On démarre la session (ceci est indispensable dans toutes les pages de notre section membre) -->
<?php include("../../modele/sessionStart.php"); ?>

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

<div id="profil">

	<div class="profil profil_block" id="affichageProfil">
		<h1>Votre profil</h1>

		 <?php
                if(!empty($_POST['update'])){
                    include("../../controleurs/ajoutimageController.php");
                    ajout_image2($_SESSION["id"]);
                }
                $fichier = $_SESSION['image'];
                $dossier = '../../assets/img/users/'.$fichier.'';
        ?>

			<div >
				<img id="photoProfil" alt="profil" src="<?php echo $dossier; ?>"/><!-- pouvoir cliquer sur l\'image pour la modifier -->
			</div> <!-- photo profil -->
			<div>
				<ul class="infoProfil">
					<li>Nom : <?php echo strtoupper($_SESSION["nom"]); ?> </li>
					<li>Prénom : <?php echo ucfirst($_SESSION["prenom"]); ?></li>
					<li>Date de naissance : <?php echo $_SESSION["born"]; echo " "; echo "("; echo $_SESSION['age']; echo " ";echo "ans)"; ?></li>
					<li>Adresse :<br />
					<?php echo $_SESSION["adresse"]; ?><br />
					<?php echo $_SESSION["cdp"]; ?><?php echo " "; ?><?php echo $_SESSION["ville"]; ?></li>
					<li>Téléphone : <?php echo $_SESSION["telephone"]; ?></li>
					<li>Email : <?php echo $_SESSION["email"]; ?></li>
				</ul>
			</div> <!-- info profil -->
	</div> <!-- profil_block, profil et affichage profil -->

			<?php
			if(!empty($_POST['update'])){
				updateprofil($_SESSION['id']);
			} 
			?>

	<div class="form profil_block" id="modifProfil">
		<h1>Modification du profil</h1>
			<form action="" method="post" enctype="multipart/form-data">

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
							Date de naissance
						</label>
						<input type="text" name="born" size="10">
					</div>
				
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
						<input type="text" name="cdp" size="10">
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

				
				<div class="top-row">
					<div class="field-wrap">
		            	<label>
							Mot de passe
						</label>
						<input type="text" name="mdp" size="10">
					</div>

					<div class="field-wrap">
		            	<label>
							Mot de passe (vérif)
						</label>
						<input type="text" name="mdp2" size="10">
					</div>
				</div> <!-- fin de la div top row -->

				<div class="field-wrap">
        <p id="birth">Photo de profil (JPG, PNG ou GIF | max. 1 Mo)<span class="req">*</span></p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                    <input type="file" name="avatar" id="avatar"/><br />
        </div>


					<button type="submit" name="update" class="button button-block" value="ok"> Mettre à jour le profil </button>
			</form>

			
	</div> <!-- fin de form -->

<?php 
		afficheAnnonce($_SESSION['id']);
		if(!empty($_POST['changer'])){			// On recuperer la variable changer du formulaire
												// Si elle a pour valeur 'Delete', alors on lance la fonction deletepanier
			deleteAnnonce($user, $_GET['product']);
		}
		if($_POST['delete']){
			sedesincrire($_SESSION['id']);
		}
?>
	<div class="form">
			<div class="top-row">
				<form action="" method="POST">
					<button type="submit" class="button button-block" name="delete" value="Se désincrire" >Se désinscrire</button>
				</form>
			</div>
	</div>
</div><!-- profil -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>