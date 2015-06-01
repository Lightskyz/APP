<?php
function afficheprofil($user){
	include("modele.php");
	$sql = 'SELECT * FROM user WHERE id = '.$user.' ';
	$req = $bdd-> query($sql);
	while( $donnees = $req -> fetch()){
		echo $donnees['nom'];
		echo $donnees['prenom'];
		echo $donnees['email'];
		echo $donnees['born'];
		echo $donnees['adresse'];
		echo $donnees['cdp'];
		echo $donnees['ville'];
		echo $donnees['telephone'];
	}
}

?>