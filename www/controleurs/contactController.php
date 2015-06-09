<?php
/*
	Payraudeau Maxime
	09/06/2015
*/
function contact(){		// Fonction pour ajouter un message contact a la base de donnee

	include("../../modele/modele.php");		// On include la connexion a la bdd

	$nom = $_POST['nom'];					// On recupere les donnees des differents formulaires
	$email = $_POST['email'];
	$contenu = $_POST['comment'];
	
	$sql = ' INSERT INTO contact(nom, email, contenu) VALUES (:nom, :email, :contenu ) ';		// On les ajoutes dans la base de donnee
	$req = $bdd -> prepare($sql);
	$req -> bindParam(':nom', $nom);
	$req -> bindParam(':email', $email);
	$req -> bindParam(':contenu', $contenu);
	$req -> execute();

	echo "Le message a bien ete ajouté.";
}
?>