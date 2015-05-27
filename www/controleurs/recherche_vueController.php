<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<!-- trouver un moyen de faire un foreach et de les exposer en liste comme tel, récupérer des informations dans la base de données -->
				<li>
					<a href="#"><!-- lien vers le produit -->
						<img src="assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					</a>
					<span class="price">ÉPUISÉ</span><!-- quantité ou prix du produit -->
					<div class="property_details">
						<h1>
							<a href="#"><?php echo $donnees['nom']." "; ?></a> <!-- nom du produit -->
						</h1>
						<h2>Origine France<span class="property_size"></span></h2> <!-- détails/disponibilité du produit -->
					</div>
				</li>
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Voir plus</a>
			</div>
		</div>
			</section>	<!--  end listing section  -->