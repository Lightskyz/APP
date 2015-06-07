<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Nos produits - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		<?php include("../frames/search.php"); ?>

		<!-- Portfolio de tous les produits qui existent dans notre base de données -->

		<section class="listings">
		<div class="wrapper">
				
			<h1>Vue produit</h1>

			<ul class="properties_list">

			<!-- trouver un moyen de faire un foreach et de les exposer en liste comme tel, récupérer des informations dans la base de données -->
				
				<!-- Style d'un produit tout commenté ! -->
				
				<li> <!-- Un produit est un élement d'une liste -->
					<a href="#"><!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l'image -->
						<!-- Chargement de l'image qu'il faut récupérer dans son dossier -->
						<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					</a> <!-- fin du lien -->


					<span class="price">VENTE</span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l'image -->


					<div class="property_details"> 

						<h1>
								<span>FRAISE</span><!-- Récupération du Nom du produit -->
								<span class="property_price">
										10€/kg <!-- récupération du prix au kilo ou à l'unité directement dans la base de donnée -->
								</span> 
						</h1>
						
						<h2>
								<span class="property_size">
									Vendeur Lambda
								</span>

								
								<a href=""><div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
								</div></a>
						</h2> <!-- Récupération du nom du vendeur -->

						<h2>
							<span id="details">
								Plus de détails
							</span>
						</h2>
							
						 <div class="something">
								<h2>
									<span class="property_size">
										Quantité disponible : 3 <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
						
								<h2>
									<span class="property_size">
										Poids disponible : 5kg <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
					
								<h2>
									<span class="property_size">
										Date de publication : 06/06/2015 <!-- récupération de la date directement dans la base de donnée -->
									</span>
								</h2>
								
								<h2>
									<span class="property_size">
										Description : Blablablabla <!-- récupération de la description directement dans la base de donnée, mais par l'intermediaire d'un bouton qui permet de ralonger les détails si besoin -->
									</span><br /><br /><br />
								</h2>

						</div> <!-- something -->					
				</li>



				<li> <!-- Un produit est un élement d'une liste -->
					<a href="#"><!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l'image -->
						<!-- Chargement de l'image qu'il faut récupérer dans son dossier -->
						<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					</a> <!-- fin du lien -->
					<span class="price">VENTE</span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l'image -->
					<div class="property_details2" > 
					
					<form>
						<label>
							Quantité :
						</label>
						<input type="number" name="quantite" step="1" min="0" class="quantity_input"/><br /><br />
						<label>
							Poids :
						</label>
						<input type="number" name="poids" step="0.01" min="0" class="poids_input" />
						<br />
						<br />
						<br />
						

						<button type="submit" value="Valider" class="commander">Commander</button>
						<button type="submit" value="Retour" class="retour">Annuler</button>
					</form>
						<!--	
						<form action="<?php echo "../back/panier.php?product=".$product." "; ?> " method="POST">
							<input type="number" name="quantite" step="1" placeholder="<?php echo $data; ?>" min="0" />
								<?php echo $donnees4['nom'].' '.$donnees4['prenom'].' '.$donnees5['nom'].' '.$donnees3['prix']; ?>
							<input type="submit" name="changer" value="Valider">
							<input type="submit" name="changer" value="Delete" />
						</form> </br>
						-->

					</div> <!-- property_details2 fin -->



						 <div class="something">
								<h2>
									<span class="property_size">
										Quantité disponible : 3 <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
						
								<h2>
									<span class="property_size">
										Poids disponible : 5kg <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
					
								<h2>
									<span class="property_size">
										Date de publication : 06/06/2015 <!-- récupération de la date directement dans la base de donnée -->
									</span>
								</h2>
								
								<h2>
									<span class="property_size">
										Description : Blablablabla <!-- récupération de la description directement dans la base de donnée, mais par l'intermediaire d'un bouton qui permet de ralonger les détails si besoin -->
									</span><br /><br /><br />
								</h2>
						</div> <!-- something -->
					
				</li>
				
				<?php 
				/*
				 include("../../controleurs/voirProduit.php"); 
					  voirProduit();
					  if(!empty($_POST['addproduct'])){
					addpanier($user, $_GET['product'], $_POST['quantite']); 
				}*/
				?>


			</ul>
		</div>
		</section>	<!--  end listing section  -->

			<h1>Vue panier</h1>
	
	<div id="panier">
		<div class="panier">
			<ul><!-- Liste des produits ajouter au panier -->
				<li> 
					<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img block" /> <!-- Image du produit ajouté au panier -->
						<div class="information_produit block">
							<span class="quantite_produit">0.400g de </span>
							<span class="nom_produit">Premier produit</span><br /><br /><br /> <!-- Nom du produit -->
							<span class="nom_vendeur">Vendeur BetaOmega</span><br />
							<div class="prix_produit"> 5€
							</div> <!-- fin prix produit, mis en place d'une case -->
							<a href="">
								<div class="trash_icon">
									<i class="fa fa-trash-o fa-2x"></i>
								</div>
							</a>
							
						</div> <!-- fin information_produit -->
					
				</li>
			</ul>

			<span class="totalSpan">TOTAL : </span><div class="total_panier">5€ <!--somme des élements du panier)--></div>
			<button type="submit">Acheter/Echanger</button>

		</div> <!-- class panier -->
	</div> <!-- id panier -->


	

		<?php include("../frames/footer.php"); ?>

	</body>

</html>