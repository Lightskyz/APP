<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Connexion - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>

	<body>

		<?php include("menu.php"); ?>
		
		<?php
      	if(!isset($_POST['nom'])){
      	echo'
      
     <div  id="formulaire_inscription">
        	<h2> Module d\'inscription </h2>
      	<p>Inscrivez-vous en completant le formulaire ci-dessous</p>
			<form method="post">
				<label>Nom: <input type="text" name="nom"/></label><br/>
				<label>Prenom: <input type="text" name="prenom"/></label><br/>
				<label>Email: <input type="text" name="email"/></label><br/>
				<label>Date de naissance : <input type="date" name="born"/></label><br/>
				<label>Mot de passe: <input type="password" name="passe"/></label><br/>
				<label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>
			<input type="submit" value="S\'inscrire"/>
			</form>
	</div>';

		}
?>


		<!-- contenu de notre site -->

		<?php include("footer.php"); ?>

	</body>

</html>