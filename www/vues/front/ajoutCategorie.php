<?php include("../../modele/sessionStart.php"); ?>


<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Message - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		<?php include("../frames/search.php"); ?>
			
			<p> Vous avez ajouté une nouvelle catégorie avec succés !</p>

		<?php include("../frames/footer.php"); ?>

	</body>

</html>

<?php header('location: ../../vues/front/ajoutCategorie.php'); ?>