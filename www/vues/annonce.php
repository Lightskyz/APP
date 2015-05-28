<?php include("sessionStart.php"); ?>

<!DOCTYPE HTML>
<?php include('../modele/modele.php');?>

<html>
	
	<head>
		<title>Annonce - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>

	<body>

		<?php include("menu.php"); ?>


		
		<h1> Poster une annonce </h1>
		<div>
		<form method="post" action="">
				
				<!-- Autocomplétion et récupérer dans la table catégorie -->

				<label for="titre">Nom du produit</label><br />
				<input placeholder="Nom" type="text" name="categorie" id="categorie"><br />
				
				<label for="titre">Prix</label><br />
				<input placeholder="Prix" type="int" name="prix" id="prix"><br />
				
<!-- Réfléchir à un systeme pour laisser le choix à l'utilisateur si il met une quantité ou un poids uniquement, javascript -->
				<!-- <select><br />
					<option>Quantité</option>
					<option>Poids en kg</option>
				</select> <br />
-->
				<label for="quantite">Quantité</label><br />
		     	<input type="number" step="1" name="quantite" id="quantite" /><br />

				<label for="poids">Poids en Kg</label><br />
				<input type="number" step="1" name="poids" id="poids"/><br />

				<label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
		     	<textarea name="description" id="description"></textarea><br />
		
				<button type="submit" name="envoyer">Envoyer</button>
					
		</form>

		<?php 
		include("../controleurs/annonceController.php"); 
		addproduct(19);	//A titre indicatif pour les tests, sera à mener à changer plus tard
		?>

		</div>
		<!-- contenu de notre site -->

		<?php include("footer.php"); ?>

	</body>

</html>
