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
			
		<form method="post" action="../controleurs/AnnonceControlleur.php" >

				<input placeholder="Titre de l'annonce" type="text" name="title">

				<input placeholder="Nom" type="text" name="name">
		
				<select placeholder="Fruit ou légumes" name="category">
					<option>Fruits</option>
					<option>Legumes</option>
				</select>

				<input placeholder="Prix" type="text" name="price">

				<input placeholder="Quantité" type="text" name="quantity">

				<input placeholder="Code Postal" type="text" name="cdp">

				<input placeholder="Ville" type="text" name="city">

				<input placeholder="Description" type="text" name="description">

		<!-- <input placeholder="Image" type="text" name=""> -->
		
				<button type="submit" name="envoyer">Envoyer</button>
					<?php include("../controleurs/AnnonceControlleur.php"); ?>
		</form>

		<!-- contenu de notre site -->

		<?php include("footer.php"); ?>

	</body>

</html>