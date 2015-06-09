<?php
/*
	Payraudeau Maxime
*/
function voirProduit(){		// Fonction pour afficher l'ensemble des produits de la base de donnee

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd
	include("../../controleurs/panierController.php");

	$sql = 'SELECT * FROM produit' ;
	$req = $bdd -> query($sql);
	while( $donnees = $req -> fetch()){
		$sql2 = 'SELECT * FROM user WHERE id = '.$donnees['id_user'].' ';
		$req2 = $bdd -> query($sql2);
		while( $donnees2 = $req2 -> fetch()){
			$sql3 = ' SELECT * FROM categorie WHERE id = '.$donnees['id_categorie'].' ';
			$req3 = $bdd -> query($sql3);
			while( $donnees3 = $req3 -> fetch()){
			?>
			<li> <!-- Un produit est un élement d\'une liste -->
				<a href="#"><!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l\'image -->
						<!-- Chargement de l\'image qu\'il faut récupérer dans son dossier -->
					<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					
				</a> <!-- fin du lien -->


					<span class="price"><?php echo strtoupper($donnees["transaction"]); ?></span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l\'image -->

				
				<div class="properties_details">
				<div class="property_details" id="information"> 

						<h1>
								<span><?php echo ucfirst($donnees3["nom"]); ?></span><!-- Récupération du Nom du produit -->
								<span class="property_price">
										<?php echo ucfirst($donnees["prix"]); ?>€/kg <!-- récupération du prix au kilo ou à l\'unité directement dans la base de donnée -->
								</span> 
						</h1>
						
						<h2>
								<span class="property_size">
									<?php echo ucfirst($donnees2["nom"])." ".ucfirst($donnees2["prenom"]); ?>
								</span>

								
								<div class="bag_icon">
									<a href="#transaction">
										<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
									</a>
								</div>
						</h2> <!-- Récupération du nom du vendeur -->

						<h2>
							<span id="details">
								Plus de détails
							</span>
						</h2>
							
						 <div class="something">
								<h2>
									<span class="property_size">
										Quantité disponible : <?php $donnees["quantite"]; ?> <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
						
								<h2>
									<span class="property_size">
										Poids disponible : <?php $donnees["poids"]; ?> kg <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
					
								<h2>
									<span class="property_size">
										Date de publication : <?php $donnees["date_publication"]; ?> <!-- récupération de la date directement dans la base de donnée -->
									</span>
								</h2>
								
								<h2>
									<span class="property_size">
										Description : <?php $donnees["description"]; ?> <!-- récupération de la description directement dans la base de donnée, mais par l\'intermediaire d\'un bouton qui permet de ralonger les détails si besoin -->
									</span>
									<br />
									<br />

									<br />
								</h2>

						</div> <!-- something -->	
					</div> <!-- property details -->
					
					<div class="property_details2" id="transaction"> 
					
					<form method="post" action="../vues/front/produit.php?product="<?php echo $product; ?>"&quantite="<?php echo $_POST["quantite"]; ?>"">
						<label>
							Quantité :
						</label>
					<input type="number" name="quantite" step="1" min="0" max="<?php echo $donnees["quantite"]; ?>" class="quantity_input"/><br /><br />
						<label>
							Poids :
						</label>
					<input type="number" name="poids" step="0.01" min="0" max="<?php echo $donnees["poids"]; ?>" class="poids_input" />
						<br />
						<br />
						<br />
						

						<button type="submit" value="Valider" class="commander">Commander</button><!-- appelle la fonctione, ajoutpanier() -->
						<button type="submit" value="Retour" class="retour"><a href="#information">Annuler</a></button>
					</form>
					

				</div> <!-- property_details2 fin -->
				

			</div> <!-- properties details -->
		</li>

		<?php
				$product = $donnees['id'];
				?>

				<form action="../vues/front/produit.php?product="<?php echo $product; ?>"&quantite="<?php echo $_POST['quantite']; ?>" " method="POST" > <!-- Met l'URL de la page de ta vue avec ?product=".$product." apres comme dans le panier -->
					<input type="number" name="quantite" step="1" min="0" max="<?php echo $donnees['quantite']; ?>" />
					<input type="button" name="addproduct" value="ajouter au panier" >
				</form>

				

				<?php
				
			}
		}
	}
}
?>