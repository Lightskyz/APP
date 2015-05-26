<!DOCTYPE html>
<html>

	<head>
	<title>Formulaire de saisie de produit </title>
	<meta charset = "utf-8">
	</head>
	<body>
		<form method="post" action="ajout_prod.php" enctype="multipart/form-data">
			
			<input type="text" name="id_produit" id="id_produit" hidden />

			<label for="titre">Nom du produit</label><br />
		     <input type="text" name="titre" id="titre" /><br />
		    
		    <label for="variete">Variété</label><br />
		     <input type="text" name="variete" id="variete" /><br />
		    
		    <label for="saison">Saison</label><br />
		     <input type="text" name="saison" id="saison" /><br />
		    
		    <label for="dateRecolte">Date de récolte</label><br />
		     <input type="text" name="dateRecolte" id="dateRecolte" /><br />

		    <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />
		     <textarea name="description" id="description"></textarea><br />

		    <label for="quantite">Quantité</label><br />
		     <input type="number" step="1" name="quantite" id="quantite"/><br />

		    <label for="poids">Poids en Kg</label><br />
		     <input type="number" step="0.1" name="poids" id="poids"/><br />

		    <label for="avatar">Image (JPG, PNG ou GIF | max. 100 Ko) :</label><br />
		     <input type="hidden" name="MAX_FILE_SIZE" value="100000">
		     <input type="file" name="avatar" id="avatar" /><br />

	  		<!--<label for="vendeur">Vendu par :</label><br />
		     <input type="text" name="vendeur" id="vendeur" /><br /> -->

		    <input type="submit" name="submit" value="Envoyer" />
		</form>

	</body>
</html>