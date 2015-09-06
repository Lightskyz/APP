<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Annonce - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>

		<div class="form">
			<h1> Poster une annonce </h1>

			<form method="post" action="" >
				<!-- Autocomplétion et récupérer dans la table catégorie -->
				<div class="field-wrap">
					<label for="categorie">
						Nom du produit
					</label>
					<input type="text" name="categorie" id="categorie" required>
				</div>
				
				<div class="field-wrap">
					<label for="prix">
						Prix (en €/kg ou €/ù)
					</label>
				<input  type="double" name="prix" id="prix" required>
				</div>

				<div class="field-wrap">
					<label for="quantite">
						Quantité
					</label>
		     	<input type="number" step="1" name="quantite" id="quantite" />
		     	</div>

				<div class="field-wrap">
					<label for="poids">
						Poids (en kg)
					</label>
				<input type="number" step="1" name="poids" id="poids"/>
				</div>

				<div class="field-wrap">
					<label for="description">
						Description de votre fichier (max. 255 caractères)
					</label>
		     		<textarea name="description" id="description"></textarea>
		     	</div>
				
				<div class="field-wrap">
					<input type="radio" name="transaction" id="transaction" value="Echange"><span class="radio_legend">Echange</span>
					<input type="radio" name="transaction" id="transaction" value="Vente">
					<span class="radio_legend">Vente</span><br />
				</div>

				
	
				<button type="submit" class="button button-block" name="envoyer1" value="envoyer">Poster une annonce</button>
					</form>
					<?php 
						include("../../controleurs/annonceController.php"); 

						if(!empty($_POST['envoyer1'])){
							addproduct($_SESSION['id']);	//A titre indicatif pour les tests, sera à mener à changer plus tard
						}
						else{
							
						}
					?>

			
	</div>
		<?php include("../frames/footer.php"); ?>
		

	</body>

</html>
