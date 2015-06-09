<?php 
		include("../../modele/sessionStart.php");
		//include('../../controleurs/profilController.php');

		//afficheprofil($email);
?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Panier - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		<?php include("../frames/search.php"); ?>

		<!-- Notre panier -->
		<?php
		// J'en déduis le controleur ou alors c'est bien un autre fichier panier ?? (différent de panier_vue et panierController)
		//include("panier.php");
		include('../../controleurs/panierController.php');

		$user = $_SESSION['id'] ;
		if(!empty($_POST['changer'])){													// On recuperer la variable changer du formulaire
			if($_POST['changer'] == 'Delete'){											// Si elle a pour valeur 'Delete', alors on lance la fonction deletepanier
				deletepanier($user, $_GET['product']);
		}else {																			// Sinon on lance la fonction updatepanier avec les valeurs recuperer dans l'URL
				updatepanier($user, $_GET['product'], $_POST['quantite'], $_POST['poids']);
		}
		affichepanier($user);
}

/*
if(!empty($_POST['delete'])){
	deletepanier($user, $donnees2['id_product']);
} else {
if(!empty($_POST["changer"])){
	echo $_POST["$data"];
	updatepanier($user, $donnees3['id'],$_POST["$data"]);
}
}
*/
?>

	<div id="panier">

    <h1>Panier de <?php echo $_SESSION['nom']; ?> </h1>

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

				<li> 
					<img src="../../assets/img/products/banane.jpg" alt="" title="" class="property_img block" /> <!-- Image du produit ajouté au panier -->
						<div class="information_produit block">
							<span class="quantite_produit">2 </span>
							<span class="nom_produit">Deuxiemes produit</span><br /><br /><br /> <!-- Nom du produit -->
							<span class="nom_vendeur">Vendeur AlphaLambda</span><br />
							<div class="prix_produit"> 1 fruit
							</div>

							<a href="">
								<div class="trash_icon">
									<i class="fa fa-trash-o fa-2x"></i>
								</div>
							</a>
							
							
						</div> <!-- fin information_produit -->
				</li>


				<li> 
					<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img block" /> <!-- Image du produit ajouté au panier -->
						<div class="information_produit block">
							<span class="quantite_produit">0.400g de </span>
							<span class="nom_produit">Premier produit</span><br /><br /><br /> <!-- Nom du produit -->
							<span class="nom_vendeur">Vendeur BetaOmega</span><br />
							<div class="prix_produit"> 5€
							</div>
							<a href="">
								<div class="trash_icon">
									<i class="fa fa-trash-o fa-2x"></i>
								</div>
							</a>

							
				</li>
			</ul>

			<span class="totalSpan">TOTAL : </span><div class="total_panier">100€ <!--somme des élements du panier --></div>
			<button type="submit">Acheter/Echanger</button>

    	</div> <!-- fin de classe panier -->
    </div> <!-- fin de id panier -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>