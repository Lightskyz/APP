<?php
include("../../modele/modele.php");

function test(){
	echo'Hello World !';
}
function afficheprofil($user){
	include("../../modele/modele.php");
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
function autrement(){
	include("../../modele/modele.php");
	echo"coucou";
	$sql = 'SELECT * FROM user';
	echo'coucou2';
	$req = $bdd->query($sql);
	echo'coucou3';
	while( $donnees = $req -> fetch()){
		echo $donnees['nom'];
	}
}
?>