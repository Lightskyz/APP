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
				 voirProduit();

				if(!empty($_GET['product'])){
					if(!empty($_GET['quantite'])){
						addpanier($_SESSION["id"], $_GET['product'], $_GET['quantite'], 0); 
				}
				else{
						addpanier($_SESSION["id"], $_GET['product'], 0,  $_GET['poids']);
				}
			}
		?>

		</ul>
	</div>
</section>	<!--  end listing section  -->

<?php include("../frames/footer.php"); ?>

</body>

</html>