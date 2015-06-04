<?php
/*
	Maxime Payraudeau
	28/05/2015
	Version 1.0.1
*/
$user = 1;

	include("forum_controleur.php");

	if(empty($_GET['mes-message'])){
		if(empty($_GET['topic'])){

			if(isset($_GET['forum'])){
				$forum = $_GET['forum'];
				affichage_topic($forum);
				?>
				<form method="post" action="" enctype="multipart/form-data">

		    		<label for="nom"> Nom du topic.</label><br />
		     		<input type="text" name="nom" id="nom" /><br />
		     		<label for="contenu"> Description.</label><br />
		     		<input type="text" name="contenu" id="contenu" /><br />
				
				<input type="submit" name="poster" value="Poster" />

				</form>
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

			if(!empty($_POST['changer'])){
				delete_message($user, $_GET['delete']);
				echo " Veuillez actualiser votre page web.";
			}
			?>
			<form method="post" action="" enctype="multipart/form-data">

		    	<label for="message"> Votre réponse.</label><br />
		     	<input type="text" name="message" id="categorie" /><br />
			<input type="submit" name="repondre" value="Repondre" />
			</form>
			<?php
			post_message($user, $forum, $topic);

		}
?>
	<a href='forum_vue.php?mes-message=1'> Mes messages </a>

<?php
	} else {
		affichage_mes_messages($user);
	}
	
?>