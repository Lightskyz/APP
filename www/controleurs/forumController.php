<?php

/* Maxime Payraudeau 
    28/05/2015
    Version 1.0.0
*/	

/* 
	Affiche les différents forums.
	28/05/2015
	Version 1.0.1
*/

function affichage_forum(){			// Fonction pour afficher les differents forums de la base de donnee

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$sql = ' SELECT * FROM forum ORDER BY id ASC ';		// On selectionne l'ensemble des forums de la base de donnee 
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){					// On affiche les resultats sous la forme d'un tableau
		//Vue des forum existants !
		echo "<a href='../front/forum.php?forum=".$donnees['id']." ''><div class='forum'><p class='titre'>".$donnees['nom']."</p></br><p class='description'>".$donnees['description']."</p></div></a>" ;
		// On affiche le nom du forum avec un lien qui actualise la variable forum dans l'URL
	}
}

/* 
	Affiche les topic relatif au forum.
	28/05/2015
	Version 1.0.1
*/

function affichage_topic($forum){		// Fonction pour afficher les differents topics relatif au forum 

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	echo "<a href='../front/forum.php'><span class='accueil'>Accueil du forum</span></a></br>" ;	// Lien pour retourner a l'acceuil du forum

	$sql = ' SELECT * FROM topic WHERE id_forum = '.$forum.' ORDER BY nom ASC ';		// Requete SQL pour afficher l'ensemble des elements de la table topic avec id_forum egal a la variable $forum
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		//Vue des topics dans un topic

		echo "<a href='../front/forum.php?forum=".$forum."&topic=".$donnees['id']." ''><div class='forum'><p class='titre'>".$donnees['nom']."</p><p class='description'>".$donnees['contenu']."</p></div></a>" ;
		// On affiche le nom du forum avec un lien qui actualise la variable forum et topic dans l'URL
	}
	echo "<a href='../front/forum.php'><button class='button button-block2'>Retour</button></a></br>" ;		// Lien pour retourner a la page categorie du forum
}

/* 
	Affiche les message relatif au topic.
	28/05/2015
	Version 1.0.1
*/

function affichage_message($forum, $topic){		// Fonction pour afficher les messages relatif au topic et au forum correspondant

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	echo "<a href='../front/forum.php'><span class='accueil'>Accueil du forum</span></a></br>" ;	// Lien pour retourner a l'acceuil du forum

	$sql = ' SELECT * FROM message WHERE id_topic = '.$topic.' ORDER BY date ASC ';		// Requete SQL pour afficher l'ensemble des messages de la table message ou id_topic egal a $topic ordonnes par date ascendante
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){		// On affiche les resultats sous forme d'un tableau
		$user = $donnees['id_user'];
		$sql2 = ' SELECT * FROM user WHERE id = '.$user.' ';	// Requete SQL pour selectionner l'ensemble des utilisateur qui ont pour id egale a l'id_user de la table message
		$req2 = $bdd -> query($sql2);
		while($donnees2 = $req2 -> fetch() ){
			//Vue des message dans un topic ! (avec le nom de l'auteur)

			//Données de l'utilisateur qui poste (récupérer la photo si possible)
			echo "<div class='reponse'>

					<div class='auteur tout'>
						".$donnees2['nom']." ".$donnees2['prenom']." 
					</div>

					<div class='message tout'>
						".$donnees['message']."
					</div>
				</div>";  // On affiche le nom / prenom de l'auteur ainsi que le contenu du message
		
		}
		$id = $donnees['id'];
		echo'<hr>';
		?>

		<!-- Test à faire, si erreur alors c'est due au chemin -->

<!-- Ici le truc pour effacer les messages -->
		<form action="<?php echo "../front/Sforum.php?forum=".$forum."&topic=".$topic."&delete=".$id." "; ?> " method="POST">
			<a href="">				
				<button type="submit" class="trash_icon" name="changer" value="Delete">
					<i class="fa fa-trash-o fa-2x"></i>
				</button>
			</a>
		</form>

			<!-- <input type="submit" name="changer" value="Delete" /> -->


		<?php
	}
	echo "<a href='../front/forum.php?forum=".$_GET['forum']." ''><button class='button button-block2'>Retour</button></a></br>" ; // Lien pour retourner a la page categorie du forum 
}

/* 
	Ajout les messages d'un utilisateur.
	28/05/2015
	Version 1.0.1
*/

function affichage_mes_messages($user){ 	// Fonction pour afficher les messages relatif a l'utilisateur $user
	
	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	echo "<a href='../front/forum.php'><span class='accueil'>Accueil du forum</span></a><br /><br /><hr>" ;	// Lien pour retourner a l'acceuil du forum

	$sql = ' SELECT * FROM message WHERE id_user = '.$user.' ORDER BY date ASC ';		// Ensemble de requete SQL pour obtenir l'ensemble des messages de l'utilisateur
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		$sql2 = ' SELECT * FROM topic WHERE id = '.$donnees['id_topic'].' ';
		$req2 = $bdd -> query($sql2);
		while($donnees2 = $req2 -> fetch() ){
			$sql3 = ' SELECT * FROM forum WHERE id = '.$donnees2['id_forum'].' ';
			$req3 = $bdd -> query($sql3);
			while($donnees3 = $req3 -> fetch() ){

				//Récupérer le topic tout en haut pour savoir à quoi il reponde sinon inutile ...

				//Tous les messages que l'utilisateur à écrit (récupérer nom du forum et du topic sur lequel il a posté)

				echo " Forum ".$donnees3['nom']." Topic ".$donnees2['nom']." Message ".$donnees['message']." 
				<a href='../front/forum.php?forum=".$donnees3['id']."&topic=".$donnees2['id']." '> Accéder au topic </a></br>"; // Lien pour acceder au topic relatif au message
			}
		}
	}
}

/* 
	Ajout d'un message.
	28/05/2015
	Version 1.0.1
*/

function post_message($user, $forum, $topic){		// Fonction  pour ajouter un message a la base de donnee

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	if(!empty($_POST['message'])) {			// Si on a le formulaire ou le message et non vide, alors on rentre dans la condition
		$message = $_POST['message'];
				$message = $_POST['message'];
				$sql = 'INSERT INTO `message`(`id_topic`, `id_user`, `date`, `message`) VALUES (:id_topic, :id_user, NOW() ,:message)';		// On insere le message dans la table message avec chaque variable associer a un attribut
				$req = $bdd->prepare($sql);
				$req -> bindParam(':id_user' , $user );
				$req -> bindParam(':id_topic' , $topic );
				$req -> bindParam(':message' , $message );
				$req->execute();
			echo " Veuillez actualiser votre page web.";
			}
}

/* 
	Ajout d'un topic.
	28/05/2015
	Version 1.0.1
*/

function ajout_topic($forum){		// Fonction pour ajouter un topic a la categorie de $forum

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$nom = $_POST['nom'];
	$contenu = $_POST['contenu'];
	$sql = 'INSERT INTO `topic`(`id_forum`, `nom`, `contenu`) VALUES (:id_forum,:nom,:contenu)';
				$req = $bdd->prepare($sql);
				$req -> bindParam(':id_forum' , $forum );
				$req -> bindParam(':nom' , $nom );
				$req -> bindParam(':contenu' , $contenu );
				$req -> execute(); 
}

/*
	Supprimer un commentaire 
	04/06/2015
*/
function delete_message($user, $id){	// Fonction pour supprimer un message 

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$sql = 'SELECT id_user FROM message ';
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch()){
		if( $user == $donnees['id_user'] ){
			$sql2 = 'DELETE FROM message WHERE id = "'.$id.'" AND id_user="'.$user.'" ';
			$req2 = $bdd -> prepare($sql2);
			$req2 -> execute();
		} else if( $_SESSION['isAdmin'] == '1' ){
			$sql2 = 'DELETE FROM message WHERE id = "'.$id.'" ';
			$req2 = $bdd -> prepare($sql2);
			$req2 -> execute();
		}
	}
}
?>