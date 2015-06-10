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
				

				<?php 
				 include("../../controleurs/voirProduit.php"); 				
				//include("../../controleurs/panierController.php");		  
				if($_SESSION['recherche'] == 1 ){
					voirProduit();
				
				 	if(!empty($_GET['product'])){

						$quantite = $_POST['quantite'];
						$poids = $_POST['poids'];

						addpanier($_SESSION['id'], $_GET['product'], $quantite, $poids );
				} else {
					
					if(!empty($_GET['product2'])){

						$quantite = $_POST['quantite2'];
						$poids = $_POST['poids2'];
							
						addpanier($_SESSION['id'], $_GET['product2'], $quantite, $poids );
						$_SESSION['recherche'] = 0 ;
								}
				}
			
			}
				
		?>

		</ul>
	</div>
</section>	<!--  end listing section  -->

<?php include("../frames/footer.php"); ?>

</body>

</html>