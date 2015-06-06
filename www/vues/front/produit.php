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

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
				</li>

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

								
								<div class="bag_icon">
									<img src="../../assets/img/bag.svg" title="bag" alt="panier" />
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
									</span><br /><br /><br />
								</h2>

						</div> <!-- hidden -->

					</div>

					
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
			
			<h1>Vue panier</h1>

			<li> <!-- Un produit est un élement d'une liste -->
					<!-- lien pour ajouter au panier, rajouter un effet "hover" en rajoutant la phrase "mettre au panier" ou alors créer un bouton spécial et enelever le lien sur l'image -->
						<!-- Chargement de l'image qu'il faut récupérer dans son dossier -->
						<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					<!-- fin du lien -->
					<span class="">VENTE</span><!-- Savoir si le produit est en vente ou en echange -->
					<!-- Légende en bas de l'image -->
					<div class=""> 

						<h1>
								<span>FRAISE</span><!-- Récupération du Nom du produit -->
								<span class="">
										10€ <!-- récupération du prix au kilo ou à l'unité directement dans la base de donnée -->
								</span> 
						</h1>
						
						<h2>
								<span class="">
									Vendeur Alpha
								</span>

						</h2> <!-- Récupération du nom du vendeur -->

						<h2>
							<span id="">
								Plus de détails
							</span>
						</h2>
						 <div class="">
								<h2>
									<span class="">
										Quantité commandé : 2 <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
								<h2>
									<span class="">
										Poids commandé : 0.400kg <!-- récupération du chiffre directement dans la base de donnée -->
									</span>
								</h2>
								<h2>
									<span class="">
										Date de publication : 06/06/2015 <!-- récupération de la date directement dans la base de donnée -->
									</span>
								</h2>
								<h2>
									<span class="">
										Description : Blablablabla <!-- récupération de la description directement dans la base de donnée, mais par l'intermediaire d'un bouton qui permet de ralonger les détails si besoin -->
									</span><br /><br /><br />
								</h2>
						</div> <!-- hidden -->
					</div>
				</li>

		</div>
	</section>	<!--  end listing section  -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>