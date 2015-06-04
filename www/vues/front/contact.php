<?php include("../../modele/sessionStart.php"); ?>


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
			<!-- est-ce que c'est nécessaire de mettre l'action ici ou pas, je ne pense pas, à discuter -->
			<form method="post" action="" id="contact" >
				
				<div class="field-wrap">
					<label for="nom">
						Nom & Prénom
					</label>
					<input type="text" name="nom">
				</div>

				
				<div class="field-wrap">
					<label for="email">
						E-mail
					</label>
					<input type="text" name="email">
				</div>
				
				<div class="field-wrap">
					<label for="objet">
						Objet
					</label>
					<input type="text" name="objet">
				</div>
				
				<div class="field-wrap">
					<label for="message">
						Votre message
					</label>
					<textarea style="height:150px" name="message" form="contact"></textarea>
				</div>

				
				

				<button type="submit" class="button button-block" name="envoyer">Envoyer</button>
					<?php include("../../controleurs/contactController.php"); 
					if(!empty($_POST['envoyer'])){
						contact();
					}
					?>
		</form>

		</div> <!-- fin de form -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>