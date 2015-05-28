<?php include("/modele/sessionStart.php"); ?>

<!DOCTYPE HTML>
<?php include('/modele/modele.php');?>

<html>
	
	<head>
		<title>Connexion - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		
      
     <div  id="form_signin">
        <h2> Inscription </h2>
      		<p>Inscrivez-vous en completant le formulaire ci-dessous</p>
			<form method="post" action="/controleurs/inscriptionController.php">
				<label>Nom: <input type="text" name="nom"/></label><br/>
				<label>Prenom: <input type="text" name="prenom"/></label><br/>
				<label>Date de naissance : <input type="date" name="born"/></label><br/>
				<label>Email: <input type="text" name="email"/></label><br/>
				<label>Mot de passe: <input type="password" name="mdp"/></label><br/>
				<label>Confirmation du mot de passe: <input type="password" name="mdp2"/></label><br/>
				<label>Adresse: <input type="text" name="adresse"/></label><br/>
				<label>Code postal: <input type="text" name="cdp"/></label><br/>
				<label>Ville: <input type="text" name="ville"/></label><br/>
				<label>Telephone: <input type="text" name="telephone"/></label><br/>

				<label>Image: <input type="text" name="image"/></label><br/>

			<input type="submit" value="S'inscrire"/> 
			<?php include("/controleurs/inscriptionController.php"); ?>
			</form>
	</div>
	
		<!-- contenu de notre site -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>


<!-- 

<label for="image">Image (JPG, PNG ou GIF | max. 100 Ko) :</label><br />
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<input type="file" name="image" id="image" /><br /> 
	<?php 
	//	include("../controleurs/ajoutimageController.php");
	// 	 ajout_image(user);
	 ?>

-->