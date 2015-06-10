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

<a href="produit.php"><div class="buttonPlus"> Voir plus ...</div></a>

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

