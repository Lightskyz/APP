<?php
function voirProduit(){
	include("modele.php");

	$sql = 'SELECT * FROM produit' ;
	$req = $bdd -> query($sql);
	while( $donnees = $req -> fetch()){
		$sql2 = 'SELECT * FROM user WHERE id = '.$donnees['id_user'].' ';
		$req2 = $bdd -> query($sql2);
		while( $donnees2 = $req2 -> fetch()){
			$sql3 = ' SELECT * FROM categorie WHERE id = '.$donnees['id_categorie'].' ';
			$req3 = $bdd -> query($sql3);
			while( $donnees3 = $req3 -> fetch()){
				echo "Vendeur : ".$donnees2['nom']." ".$donnees2['prenom']." Categorie : ".$donnees3['nom']." Quantité : ".$donnees['quantité']." Prix : ".$donnees['prix']." "; 
			}
		}
	}
}

?>