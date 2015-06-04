<?php include("/modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Contact - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>

		<div>
		
		<form method="post" action="/controleurs/#.php" id="contact" >
				
				<label for="comment">Nom Prénom</label><br />
				<input placeholder="Nom Prénom" type="text" name="nom"><br />
				
				<label for="comment">Adresse email</label><br />
				<input placeholder="Email" type="text" name="email"><br />

				<label for="comment">Votre message</label><br />
				<textarea name="comment" form="contact"> Votre message 
				</textarea><br />
				

				<button type="submit" name="envoyer">Envoyer</button>
					<?php include("contact.php"); 
					if(!empty($_POST['envoyer'])){
						contact();
					}
					?>
		</form>

		</div>

		<?php include("../frames/footer.php"); ?>

	</body>

</html>