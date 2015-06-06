<?php
function afficheprofil($user){
	include("../../modele/modele.php");
	$sql = 'SELECT * FROM user WHERE email = "'.$user.'" ';
	$req = $bdd-> query($sql);
	while( $donnees = $req -> fetch()){

		$_SESSION["id"]=$donnees["id"];
		$_SESSION["nom"]=$donnees["nom"];
		$_SESSION['prenom'] = $donnees["prenom"];
		$_SESSION['email'] = $donnees["email"];
		$_SESSION['born'] = $donnees["born"];
		$_SESSION['adresse'] = $donnees["adresse"];
		$_SESSION['cdp'] = $donnees["cdp"];
		$_SESSION['ville'] = $donnees["ville"];
		$_SESSION['telephone'] = $donnees["telephone"];
		$_SESSION['isAdmin'] = $donnees["isAdmin"];
		$_SESSION['mdp'] = $donnees['mdp'];
		$_SESSION['age'] = floor((time() - strtotime($_SESSION['born']))/3600/24/365);

	}
}

?>