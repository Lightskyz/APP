<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE html>
<html lang="fr-FR">

	<head>
		<title>Achat - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
	</head>

	<body>
		<section class="hero">
			<?php include("../frames/menu.php"); ?>
				<section class="caption">
					<h2 class="caption">Quand le marché vient à vous</h2>
					<h3 class="properties">Fruits - Légumes à proximité de chez vous</h3>
				</section>
		</section><!--  end hero section  -->

		
		<?php include("../frames/search.php"); ?>

		<div class="dernierProduit">
			<section class="listings">
		<div class="wrapper">
				
			<h1>Derniers produits ajoutés !</h1>

			<section class="listings">
		<div class="wrapper">

			<ul class="properties_list">
				

				<?php 
			include("../../controleurs/voirProduit.php");
			if($_SESSION['recherche'] == 1 ){
				affichenewproduct();
				if(!empty($_GET['product'])){

					$quantite = $_POST['quantite'];
					$poids = $_POST['poids'];

					addpanier($_SESSION['id'], $_GET['product'], $quantite, $poids );
					
					}
			}else{
				if(!empty($_GET['product2'])){

					$quantite = $_POST['quantite2'];
					$poids = $_POST['poids2'];

					addpanier($_SESSION['id'], $_GET['product2'], $quantite, $poids );
					$_SESSION['recherche'] = 0 ;
				}
			}
				
				/*if(!empty($_GET['product'])){
					if(!empty($_GET['quantite'])){
						addpanier($_SESSION["id"], $_GET['product'], $_POST['quantite'], 0); 
				}
				else{
						addpanier($_SESSION["id"], $_GET['product'], 0,  $_POST['poids']);
				}
			}*/
		?>

		</ul>
	</div>
</section>	<!--  end listing section  -->

			<ul class="properties_list">
			<!-- Afficher les derniers produits ajouter -->

						<li> <!-- Un produit est un élement d'une liste -->
				<a href="#"><!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l'image -->
						<!-- Chargement de l'image qu'il faut récupérer dans son dossier -->
					<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
				</a> <!-- fin du lien -->


					<span class="price">VENTE</span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l'image -->

				
				<div class="properties_details">
				<div class="property_details" id="information"> 

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
									</span>
									<br />
									<br />

									<br />
								</h2>

						</div> <!-- something -->	
					</div> <!-- property details -->
					
					<div class="property_details2" id="transaction"> 
					
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
						

						<button type="submit" value="Valider" class="commander">Commander</button><!-- appelle la fonctione, ajoutpanier() -->
						<button type="submit" value="Retour" class="retour">Annuler</button>
					</form>
					

				</div> <!-- property_details2 fin -->
				

			</div> <!-- properties details -->
		</li>

		<li> <!-- Un produit est un élement d'une liste -->
				<a href="#"><!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l'image -->
						<!-- Chargement de l'image qu'il faut récupérer dans son dossier -->
					<img src="../../assets/img/products/banane.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
				</a> <!-- fin du lien -->


					<span class="price">VENTE</span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l'image -->

				
				<div class="properties_details">
				<div class="property_details" id="information"> 

						<h1>
								<span>BANANE</span><!-- Récupération du Nom du produit -->
								<span class="property_price">
										10€/kg <!-- récupération du prix au kilo ou à l'unité directement dans la base de donnée -->
								</span> 
						</h1>
						
						<h2>
								<span class="property_size">
									Vendeur Lambda
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
									</span>
									<br />
									<br />

									<br />
								</h2>

						</div> <!-- something -->	
					</div> <!-- property details -->
					
					<div class="property_details2" id="transaction"> 
					
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
						

						<button type="submit" value="Valider" class="commander">Commander</button><!-- appelle la fonctione, ajoutpanier() -->
						<button type="submit" value="Retour" class="retour">Annuler</button>
					</form>
					

				</div> <!-- property_details2 fin -->
				

			</div> <!-- properties details -->
		</li>
	</ul>
</div>
</div>

<article>
			<h1> Présentation du concept </h1>
			<p> Pear2Pear est un site permettant aux particuliers et aux agriculteurs de partager les récoltes, les produits de leurs potagers. Ce système permet à tous d’acheter des produits sortant directement de chez le producteur. Vous savez où votre tomate a été produite par qui, et dans quelles conditions.</p><br />
			<p> Pear2Pear, c’est aussi un système humain et chaleureux qui vous permets de rencontrer les producteurs et d’échanger vos astuces et recettes !</p><br />
			<p> Pour acheter, rien de plus simple ! Il vous suffit de taper le nom d’un produit et de votre ville dans la barre de recherche, et des dizaines de produits frais vendus par des agriculteurs à côté de chez vous apparaissent. Vous n’avez plus qu’à prendre contact avec l’agriculteur et à le rencontrer pour acheter ou troquer son produit. </p><br />
			<p id="signature">L'équipe Pear2Pear</p>
		</article>
</section>

		<?php include("../frames/footer.php"); ?>

	</body>
					
</html>

<!-- Partie vu si et seulement si l'individu n'est pas connecté, à remplacer par le nom de l'utilisateur et sa photo lorsqu'il se connecte, trouver un moyen de faire apparaitre cette partie si et seulement si il n'est pas connecté sinon affiché le bon truc... Mettre du code php avec des if et echo je pense -->

<!-- Vue plutot pour les produits et non pas pour la page d'accueil -->

</html>

