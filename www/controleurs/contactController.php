<?php
function contact(){
	include("../../modele/modele.php");

	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$contenu = $_POST['comment'];
	
	$sql = ' INSERT INTO contact(nom, email, contenu) VALUES (:nom, :email, :contenu ) ';
	$req = $bdd -> prepare($sql);
	$req -> bindParam(':nom', $nom);
	$req -> bindParam(':email', $email);
	$req -> bindParam(':contenu', $contenu);
	$req -> execute();
}
?>