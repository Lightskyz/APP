<?php include("../../modele/sessionStart.php"); ?>

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
		include('../../controleurs/panierController.php');
	
		$user = $_SESSION['id'] ;
		affichepanier($user);

		if(!empty($_POST['changer'])){													// On recuperer la variable changer du formulaire
			if($_POST['changer'] == 'Delete'){											// Si elle a pour valeur 'Delete', alors on lance la fonction deletepanier
				deletepanier($user, $_GET['product']);
			} else {																			// Sinon on lance la fonction updatepanier avec les valeurs recuperer dans l'URL
				updatepanier($user, $_GET['product'], $_POST['quantite'], $_POST['poids']);
			}
		}
		?>
		
		<form method="post" action="" id="contact" >
			<button type="submit" class="button button-block" name="valider" value="valider" >Valider</button>
		</form>
	
		<?php
	if(!empty($_POST['valider'])){
		facture($user, $panier);
	}

?>

	<?php include("../frames/footer.php"); ?>

	</body>

</html>