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
					<a href="vues/signin.php" class="login_btn">Sign in</a>
					<a href="vues/signup.php" class="login_btn">Sign up</a>

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
					<h2>Plan du site</h2>
					<ul>
						<li><a href="achat.php">Achat</a></li>
						<li><a href="echange.php">Echange</a></li>
						<li><a href="annonce.php">Annonce</a></li>
						<li><a href="forum.php">Forum</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<h2>Blabla</h2>
					<ul>
						<li><a href="#">Fruits</a></li>
						<li><a href="#">Legumes</a></li>
						<li><a href="#">Fruit à coques</a></li>
						<li><a href="#">Champignons</a></li>
						<li><a href="#">Plantes</a></li>
					</ul>
				</li>

				<li class="about">
					<h2>Qui sommes-nous ?</h2>
					<p>Nous sommes actuellement en première année d'ingénieur à l'ISEP, dans le but de notre apprentissage par projet, nous devons développer une plateforme d'échange de fruit et légume entre particuliers qui vivent à proximité</p>
				</li>

				<li class="links">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.7390386358556!2d2.2801210999999997!3d48.825040400000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6707980bd3947%3A0xd54fb6c5e1933333!2s10+Rue+de+Vanves%2C+92170+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1432823789549" width="300" height="300" frameborder="0" style="border:0"></iframe>
				</li>

				

				
			</ul>
		</div>

		<div class="copyrights wrapper">
			Made by  &#9829 [G7C] - <a href="#">Conditions Général d'Utilisation</a> - <a href="contact.php">Nous Contacter</a>
		</div>
</footer><!--  end footer  -->
	
</body>
</html>

