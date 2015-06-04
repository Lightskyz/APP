<?php include("../../modele/sessionStart.php"); ?> 
<?php include("../../controleurs/forumController.php"); ?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Forum - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		<?php include("../frames/search.php"); ?>

		<h1 class="titreForum"> Bienvenue sur le forum de Pear2Pear </h1>

		<?php
/*
	Maxime Payraudeau
	28/05/2015
	Version 1.0.1
*/


$user = $_SESSION['id'];

	if(empty($_GET['mes-message'])){
		if(empty($_GET['topic'])){
			if(isset($_GET['forum'])){
				$forum = $_GET['forum'];
				affichage_topic($forum);
				?>

				<div class="form">
				<form method="post" action="" enctype="multipart/form-data">
					<div class="field-wrap">
		    			<label for="nom"> 
		    				Nom du topic
		    			</label>
		    		<input type="text" name="nom" id="nom" />
		    		</div>
		    		<div class="field-wrap">
		     			<label for="contenu"> 
		     				Description
		     			</label>
		     		<input type="text" name="contenu" id="contenu" />
		     		</div>
				
				<button class="button button-block" type="submit" name="poster">Poster</button>

				</form>
				</div>
				<?php
				if(!empty($_POST['nom'])){

					ajout_topic($forum);
				}

			} else {
				affichage_forum();
			}
		} else {
			$forum = $_GET['forum'];
			$topic = $_GET['topic'];
			affichage_message($forum, $topic);
			?>


			<div class="form">
				<form method="post" action="" enctype="multipart/form-data">
			
			<div class="field-wrap">
		    	<label for="message">
		    		Votre réponse
		    	</label>
		     	<input type="text" name="message" id="categorie" />
		     </div>


			<button type="submit" name="repondre" class="button button-block">Répondre</button>
			</form>
			</div>

			<?php
			post_message($user, $forum, $topic);

		}
?>
	<a href='../front/forum.php?mes-message=1'> Mes messages </a>

<?php
	} else {
		affichage_mes_messages($user);
	}
	
?>
		<?php include("../frames/footer.php"); ?>

	</body>

</html>