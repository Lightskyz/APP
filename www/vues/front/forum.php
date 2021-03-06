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

		<h1 class="titreForum"> Bienvenue sur le forum de Pear2Pear </h1>
		<div class="wrapper">
		<nav class="navForum">
			<ul>
				<li><a href="../front/forum.php">Accueil</a></li>
				<li><a href="../front/forum.php?mes-message=1"> Mes messages </a></li>
			</ul>
		</nav>
		</div>

<?php

/*
	Maxime Payraudeau
	09/06/2015
	Version 1.0.2
*/


$user = $_SESSION['id'];

	if(empty($_GET['mes-message'])){		// On recupere dans l'URL les variables : mes-messages, topic et forum
		if(empty($_GET['topic'])){
			if(isset($_GET['forum'])){
				$forum = $_GET['forum'];
				affichage_topic($forum);	// On appel la fonction affichage_topic
				if(!empty($_POST['nom'])){	// On ajoute un topic si le formulaire est rempli
					ajout_topic($forum);
				}

		// Bien mettre les fctions avant les formulaires pour un pb d'affichage.

				?>
					<div class="form"><!-- Formulaire pour l'ajout d'un topic avec nom et description -->

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
			</div> <!-- fin de la div form -->

			<?php 

				} else {					// Sinon on affiche l'ensemble des forum deja existants
					affichage_forum();
				}
				
		} else {										// Si on a la condition topic qui n'est pas vide, alors on affiche l'ensemble des messages relatif a ce topic
			$forum = $_GET['forum'];
			$topic = $_GET['topic'];
			
			affichage_message($forum, $topic);
			
			if(!empty($_POST['changer']) && $_SESSION['isAdmin']){
				delete_message($user, $_GET['delete']);
			}
			?>


			<div class="form">													<!-- Formulaire pour ajouter une reponse au topic -->
				<form method="post" action="" enctype="multipart/form-data">
			
			<div class="field-wrap">
		    	<label for="message">
		    		Votre réponse
		    	</label>
		     	<input type="text" name="message" id="categorie" />
		     </div>


			<button type="submit" name="repondre" value="repondre" class="button button-block">Répondre</button>
			</form>
			</div> <!-- end of div form -->

			<?php
			if(!empty($_POST['repondre'])){
				post_message($user, $forum, $topic);
			}
		}

	} else {				// Si mes-message n'est pas vide, on affiche l'ensemble des messages relatif a l'utilisateur actuellement connecter.
		affichage_mes_messages($user); 
	}
	
?>
		<?php include("../frames/footer.php"); ?>

	</body>

</html>