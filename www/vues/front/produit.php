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
							<a href="#">FRAISE</a><!-- Récupération du Nom du produit -->
							<span class="property_price">
									10€/kg <!-- récupération du prix au kilo ou à l'unité directement dans la base de donnée -->
							</span> 
						</h1>
						
							<h2>
								<span class="property_size">
									Vendeur Lambda
								</span>
							</h2> <!-- Récupération du nom du vendeur -->

							<span id="details"><h2>
								Plus de détails
							</h2></span>
							
							<div class="hidden">
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
								</h2>
							</div> <!-- hidden -->
					</div>

					
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/framboise.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">ECHANGE</span>
					<div class="property_details">
						<h1>
							<a href="#">FRAMBOISE</a>
						</h1>
						<h2>Origine France<span class="property_size"></span></h2>
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/aubergine.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">AUBERGINE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/carotte.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">CAROTTE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../../assets/img/products/banane.jpg" alt="" title="" class="property_img" />
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">BANANE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>






				<li>
					<a href="#"><!-- lien vers le produit -->
						<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					</a>
					<span class="price">ÉPUISÉ</span><!-- quantité ou prix du produit -->

					<div class="property_details">
						<h1>
							<a href="#">FRAISE</a> <!-- nom du produit -->
						</h1>
						<h2>Origine France<span class="property_size"></span></h2> <!-- détails/disponibilité du produit -->
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/framboise.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">VENTE</span>
					<div class="property_details">
						<h1>
							<a href="#">FRAMBOISE</a>
						</h1>
						<h2>Origine France<span class="property_size"></span></h2>
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/aubergine.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">ECHANGE</span>
					<div class="property_details">
						<h1>
							<a href="#">AUBERGINE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>

				<li>
					<a href="#">
						<img src="../../assets/img/products/carotte.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">CAROTTE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>
				
				<li>
					<a href="#">
						<img src="../../assets/img/products/banane.jpg" alt="" title="" class="property_img" />
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">BANANE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>
			</ul>
			
		</div>
	</section>	<!--  end listing section  -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>