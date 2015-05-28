<?php

/* David Sureau & Maxime Payraudeau 
    28/05/2015
    Version 1.0.0
*/

function create_categorie(){
	
	include ('../modele/modele.php');

	if(!empty($_POST['nom']) ) {
		$nom = $_POST['nom'];

		$sql = 'SELECT nom FROM categorie WHERE nom LIKE "%'.$nom.'%" ';
		$reponse = $bdd ->query($sql);
		while ($donnees = $reponse->fetch())
			{
				$name = $donnees['nom'];
			}
		if($name == $nom ){
			echo "categorie déjà existante" ;
		}else{
			$sql2 = 'INSERT INTO `categorie`(`nom`) 
				VALUES ( :nom )';
			$req = $bdd->prepare($sql2);
			$req -> bindParam(':nom' , $nom );
			$req->execute();
			echo "La categorie ".$nom." à bien été crée.";
		}
	}
}

function delete_categorie($categorie){
	include ('../modele/modele.php');
	$sql = 'SELECT * FROM categorie WHERE id = $categorie ';
	$req = $bdd -> query($sql);
	while ($donnees = $reponse->fetch())
		{
				if($donnees['vide'] == '0'){
					$sql2 = 'DELETE FROM categorie WHERE id = '.$categorie.' ';
					$req2 = $bdd -> prepare($sql);
					$req2 -> execute();
					echo "La catégorie ".$categorie." à été supprimée." ;
				} else {
					echo "La categorie n'est pas vide.";
				}
		}
}

function update_categorie($name){
	include ('../modele/modele.php');

	$sql =' SELECT nom FROM categorie WHERE nom = '.$name.' ';
	$req = $bdd -> query($sql);
	while ($donnees = $reponse->fetch())
		{
			$name = $donnees['nom'];
		}

	if(!empty($_POST['nom']) ) {
		$nom = $_POST['nom'];

		$sql2 = 'UPDATE categorie SET nom ='.$nom.' WHERE id = '.$id.' ';
		$reponse = $bdd ->prepare($sql2);
		$reponse -> execute();
		echo "La categorie ".$name." s'appelle maintenant : ".$nom.".";
	}
}

function ban_supp_user($choix, $user){
	include("../modele/modele.php");

	if( $choix == '1' ){
		$sql = ' DELETE FROM `user` WHERE id = '.$user.' ';
		$req = $bdd -> prepare($sql);
		$req -> execute();
		echo "L'utilisateur d'ID = ".$user." à été supprimé" ;
	}else{
		$sql2 = ' UPDATE `user` SET isAdmin = '10' ';
		$req2 = $bdd -> prepare($sql2);
		$req2 -> execute();
		echo "L'utilisateur d'ID = ".$user." à été banni" ; 
	}
}
function utilisateurs_bannis(){
	include("../modele/modele.php");

	$sql = 'SELECT * FROM user WHERE isAdmin = '10' ';
	$req = $bdd -> query($sql);
	while ($donnees = $reponse->fetch())
		{
			$name = $donnees['nom'];
		}
}
function voir_utilisateur(){
	include("../modele/modele.php");

	$sql = 'SELECT * FROM user WHERE isAdmin != '10', isAdmin != '1' ';
	$req = $bdd -> query($sql);
	while ($donnees = $reponse->fetch())
		{
			$name = $donnees['nom'];
		}
}

?>