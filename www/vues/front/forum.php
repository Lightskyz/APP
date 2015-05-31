<?php include("/modele/sessionStart.php") ?> 

<!DOCTYPE HTML>

<html>
	
	<head>
		<title>Achat - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		<?php include("../frames/search.php"); ?>

		<div class="topic">
			<div class="information">
			<div class="photoProfil"></div>
				<p class="auteur">Ecrit le<?php echo'date';?> par <?php echo'utilisateur';?></p>
			</div>
			<p class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis, odio pulvinar pulvinar dignissim, orci velit varius erat, ac laoreet mauris mauris ut ante. Nullam porttitor ultrices sem eget luctus. Nam sagittis laoreet risus vel suscipit. Cras pharetra molestie magna sit amet auctor. Aliquam egestas libero sit amet arcu commodo finibus. Pellentesque erat nibh, bibendum sed massa vel, congue laoreet magna. In sed ex maximus, sodales est id, iaculis risus. Fusce laoreet laoreet viverra. Praesent tristique gravida ipsum, quis elementum nunc faucibus aliquam. Sed accumsan malesuada placerat. Phasellus nec fringilla leo.
			</p>
			
		</div>

		<?php
		/*
			$user = 1;
				include("/controleurs/forumController.php");
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
				<a href='forum.php?mes-message=1'> Mes messages </a>

			<?php
				} else {
					affichage_mes_messages($user);
				}
			*/

			?>
		<?php include("../frames/footer.php"); ?>

	</body>

</html>