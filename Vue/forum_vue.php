<?php
$user = 1;
	include("forum_controleur.php");
	if(empty($_GET['mes-message'])){
		if(empty($_GET['topic'])){
			if(isset($_GET['forum'])){
				$forum = $_GET['forum'];
				affichage_topic($forum);
			} else {
				affichage_forum();
			}
		} else {
			$forum = $_GET['forum'];
			$topic = $_GET['topic'];
			affichage_message($forum, $topic);
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