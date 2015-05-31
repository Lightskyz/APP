<?php include("/modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Contact - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>

		<div class="form">
			<h1> Contactez-nous </h1>
			<!-- créer un module qui permet à l'administrateur de recevoir des messages -->
			<form method="post" action="/controleurs/#.php" id="contact" >
				
				<div class="field-wrap">
					<label for="comment">
						Nom & Prénom
					</label>
					<input type="text" name="nom">
				</div>

				
				<div class="field-wrap">
					<label for="comment">
						E-mail
					</label>
					<input type="text" name="email">
				</div>

				
				<div class="field-wrap">
					<label for="comment">
						Votre message
					</label>
					<textarea name="message" form="contact"></textarea>
				</div>

				
				

				<button type="submit" class="button button-block" name="envoyer">Envoyer</button>
					<?php include("/controleurs/#.php"); ?>
		</form>

		</div> <!-- fin de form -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>