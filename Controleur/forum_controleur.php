<?php
	

function affichage_forum(){
	include("modele.php");
	$sql = ' SELECT * FROM forum ORDER BY id ASC ';
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		echo "<a href='forum_vue.php?forum=".$donnees['id']." ''>".$donnees['nom']."</a></br>" ;

	}
}

function affichage_topic($forum){
	include("modele.php");
	echo "<a href='forum_vue.php'>Acceuil</a></br>" ;
	$sql = ' SELECT * FROM topic WHERE id_forum = '.$forum.' ORDER BY nom ASC ';
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		echo "<a href='forum_vue.php?forum=".$forum."&topic=".$donnees['id']." ''>".$donnees['nom']."</a></br>" ;
	}
	echo "<a href='forum_vue.php'>Retour</a></br>" ;
}

function affichage_message($forum, $topic){
	echo "<a href='forum_vue.php'>Acceuil</a></br>" ;
	include("modele.php");
	$sql = ' SELECT * FROM message WHERE id_topic = '.$topic.' ORDER BY date ASC ';
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		$user = $donnees['id_user'];
		$sql2 = ' SELECT * FROM user WHERE id = '.$user.' ';
		$req2 = $bdd -> query($sql2);
		while($donnees2 = $req2 -> fetch() ){
			echo " ".$donnees2['nom']." ".$donnees2['prenom']." ";
		}
		echo " ".$donnees['message']." </br> ";
	}
	echo "<a href='forum_vue.php?forum=".$_GET['forum']." ''>Retour</a></br>" ;
}

function affichage_mes_messages($user){
	echo "<a href='forum_vue.php'>Acceuil</a></br>" ;
	include("modele.php");
	$sql = ' SELECT * FROM message WHERE id_user = '.$user.' ORDER BY date ASC ';
	$req = $bdd -> query($sql);
	while($donnees = $req -> fetch() ){
		$sql2 = ' SELECT * FROM topic WHERE id = '.$donnees['id_topic'].' ';
		$req2 = $bdd -> query($sql2);
		while($donnees2 = $req2 -> fetch() ){
			$sql3 = ' SELECT * FROM forum WHERE id = '.$donnees2['id_forum'].' ';
			$req3 = $bdd -> query($sql3);
			while($donnees3 = $req3 -> fetch() ){
				echo " Forum ".$donnees3['nom']." Topic ".$donnees2['nom']." Message ".$donnees['message']." 
				<a href='forum_vue.php?forum=".$donnees3['id']."&topic=".$donnees2['id']." '> Accéder au topic </a></br>"; 
			}
		}
	}
}

function post_message($user, $forum, $topic){
	include("modele.php");
	if(!empty($_POST['message'])) {
		$message = $_POST['message'];
				$message = $_POST['message'];
				$sql = 'INSERT INTO `message`(`id_topic`, `id_user`, `date`, `message`) VALUES (:id_topic, :id_user, NOW() ,:message)';
				$req = $bdd->prepare($sql);
				$req -> bindParam(':id_user' , $user );
				$req -> bindParam(':id_topic' , $topic );
				$req -> bindParam(':message' , $message );
				$req->execute();
			}
}
?>