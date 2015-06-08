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
						Prix (en €)
					</label>
				<input  type="int" name="prix" id="prix" required>
				</div>

<!-- Réfléchir à un systeme pour laisser le choix à l'utilisateur si il met une quantité ou un poids uniquement, javascript -->
				<!-- <select><br />
					<option>Quantité</option>
					<option>Poids en kg</option>
				</select> <br />
-->
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
					<input type="radio" name="transaction" id="transaction"
						<?php
						if(isset($transaction) && $transaction == "Echange") echo "checked"; 
						?>
					value="Echange"><span class="radio_legend">Echange</span>
					<input type="radio" name="transaction" id="transaction"
						<?php
						if(isset($transaction) && $transaction == "Vente") echo "checked"; 
						?>
					value="Vente"><span class="radio_legend">Vente</span><br />
				</div>

				<div class="field-wrap">
        			<p id="birth">Image (JPG, PNG ou GIF | max. 100 Ko)<span class="req">*</span></p>
                    	<input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    	<input type="file" name="avatar" id="avatar" /><br />
        		</div>

				<?php 
				include("../../controleurs/ajoutimageController.php");
                    ajout_image();
                 ?>
		
				<button type="submit" class="button button-block" name="envoyer">Poster une annonce</button>		
			</form>

		<?php 
			include("../../controleurs/annonceController.php"); 
			addproduct($_SESSION["id"]);	//A titre indicatif pour les tests, sera à mener à changer plus tard
		?>
		</div> <!-- fin de form -->



		<!-- contenu de notre site -->



		<?php include("../frames/footer.php"); ?>

	</body>

</html>
