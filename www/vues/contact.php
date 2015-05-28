<?php include("sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Contact - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>

	<body>

		<?php include("menu.php"); ?>

		<div>
		
		<form method="post" action="../controleurs/.php" id="contact" >
				
				<label for="comment">Nom Prénom</label><br />
				<input placeholder="Nom Prénom" type="text" name="nom"><br />
				
				<label for="comment">Adresse email</label><br />
				<input placeholder="Email" type="text" name="email"><br />

				<label for="comment">Votre message</label><br />
				<textarea name="comment" form="contact"> Votre message 
				</textarea><br />
				

				<button type="submit" name="envoyer">Envoyer</button>
					<?php include("../controleurs/.php"); ?>
		</form>

		</div>

		<?php include("footer.php"); ?>

	</body>

</html>