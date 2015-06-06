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
			affichepanier($user);
		if(!empty($_POST['changer'])){
			if($_POST['changer'] == 'Delete'){
				deletepanier($user, $_GET['product']);
		}else {
				updatepanier($user, $_GET['product'], $_POST['quantite']);
	}
	echo " Veuillez actualiser votre page web.";
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

		<?php include("../frames/footer.php"); ?>

	</body>

</html>