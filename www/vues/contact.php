<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Contact - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>

	<body>

		<?php include("menu.php"); ?>
		
		<form method="post" action="../controleurs/.php" id="contact" >

				<input placeholder="Nom Prénom" type="text" name="nom">

				<input placeholder="Email" type="text" name="email">
				

				<button type="submit" name="envoyer">Envoyer</button>
					<?php include("../controleurs/.php"); ?>
		</form>

		<textarea name="comment" form="contact"> Votre message 
		</textarea>

		<?php include("footer.php"); ?>

	</body>

</html>