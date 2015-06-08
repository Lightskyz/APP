<?php
/*
	Payraudeau Maxime
*/
function voirProduit(){		// Fonction pour afficher l'ensemble des produits de la base de donnee

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd
	include("../controleurs/panierContoller.php");

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
				$product = $donnees['id'];
				?>
				<form action="../vues/front/produit.php?product="<?php echo $product; ?>"&quantite="<?php echo $_POST['quantite']; ?>" " method="POST" > <!-- Met l'URL de la page de ta vue avec ?product=".$product." apres comme dans le panier -->
					<input type="number" name="quantite" step="1" min="0" max="<?php echo $donnees['quantite']; ?>" />
					<input type="button" name="addproduct" value="ajouter au panier" >
				</form>
				<?php
				
			}
		}
	}
}
?>