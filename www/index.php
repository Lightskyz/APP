<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<title>Accueil - Pear2Pear</title>
				<!-- MetaDonnées -->
		<meta charset="utf-8">
		<meta name="author" content="pixelhint.com">
		<meta name="description" content="Pear2Pear est une plateforme d'achat et d'échange de fruit et légume entre particulier à proximité"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

		<!-- Stylesheet -->
		
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<!-- Favicon -->

		<!-- Polices supplémentaires -->

		<!-- Javascript nécessaire dans le code -->
		<script type="text/javascript" src="assets/js/jQuery.min.js"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>
	</head>


<body>
	<section class="hero">	
		
		<header>
	<div class="wrapper">
		<a href="index.php"><img src="assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="vues/achat.php">Achat</a></li>
				<li><a href="vues/echange.php">Echange</a></li>
				<li><a href="vues/forum.php">Forum</a></li>
				<li><a href="vues/annonce.php">Annonce</a></li>
				<li><a href="vues/contact.php">Contact</a></li>
			</ul>
			<a href="vues/login.php" class="login_btn">Login</a>
		</nav>
	</div>
	</header> <!-- end header section -->
					
		<section class="caption">
			<h2 class="caption">Quand le marché vient à vous</h2>
			<h3 class="properties">Fruits - Légumes à proximité de chez vous</h3>
		</section>
	</section><!--  end hero section  -->

				<!-- Partie vu si et seulement si l'individu n'est pas connecté, à remplacer par le nom de l'utilisateur et sa photo lorsqu'il se connecte, trouver un moyen de faire apparaitre cette partie si et seulement si il n'est pas connecté sinon affiché le bon truc... Mettre du code php avec des if et echo je pense -->
			
	<section class="search">
	<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Que recherchez vous ?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>		
	</div>
</section>

<!-- vue plutot pour les produits et non pas pour la page d'accueil -->

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
							<a href="#">FRAISE</a> <!-- nom du produit -->
						</h1>
						<h2>Origine France<span class="property_size"></span></h2> <!-- détails/disponibilité du produit -->
					</div>
				</li>

				<li>
					<a href="#">
						<img src="assets/img/products/framboise.jpg" alt="" title="" class="property_img" height="440px" width="300px"/>
					</a>
					<span class="price">ÉPUISÉ</span>
					<div class="property_details">
						<h1>
							<a href="#">FRAMBOISE</a>
						</h1>
						<h2>Origine France<span class="property_size"></span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="assets/img/products/aubergine.jpg" alt="" title="" class="property_img" height="440px" width="300px"/>
					</a>
					<span class="price">DISPO</span>
					<div class="property_details">
						<h1>
							<a href="#">AUBERGINE</a>
						</h1>
						<h2>Origine France <span class="property_size"></span></h2>
					</div>
				</li>
				
			</ul>
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Voir plus</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->
	
	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">Achats</a></li>
						<li><a href="#">Echanges</a></li>
						<li><a href="#">Recette</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Fruits</a></li>
						<li><a href="#">Legumes</a></li>
						<li><a href="#">Fruit à coques</a></li>
						<li><a href="#">Champignons</a></li>
						<li><a href="#">Plantes</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Angeles</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
					
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			
		</div>
</footer><!--  end footer  -->
	
</body>
</html>

