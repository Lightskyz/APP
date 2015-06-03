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
		$_SESSION['actif'] = $donnees['actif'];
		$_SESSION['mdp'] = $donnees['mdp'];
		$_SESSION['age'] = floor((time() - strtotime($_SESSION['born']))/3600/24/365);

		/* echo $_SESSION['id']; echo"<br />";
		echo $_SESSION['nom']; echo"<br />";
		echo $_SESSION['prenom'];echo"<br />";
		echo $_SESSION['email'];echo"<br />";
		echo $_SESSION['born'];echo"<br />";
		
		echo $_SESSION['age']; echo"ans";
		echo $_SESSION['adresse'];echo"<br />";
		echo $_SESSION['cdp'];echo"<br />";
		echo $_SESSION['ville'];echo"<br />";
		echo $_SESSION['telephone'];echo"<br />";
		echo $_SESSION['isAdmin'];echo"<br />"; */

	}
}

?>