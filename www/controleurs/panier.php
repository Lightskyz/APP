<?php
	function addpanier($user, $produtct, $quantite){

		include("modele.php");  // Inclue la base de donnée + connexion.
		
		$sql = 'INSERT INTO `detailcommande`(`id`, `id_product`, `id_user`, `quantite`) VALUES (,'.$product.','.$user.','.$quantite.') '; // Ajout d'une ligne dans la table detailCommande 
																													 // suivant les informations entrer dans la fonction panier.
		$reponse = $bdd->prepare($sql);			// Preparation de la requete SQL.
		$reponse ->execute();					// Execution de la requete SQL.

		while ($donnees = $reponse->fetch())		// Mise en forme de tableau.
			{
				$id_detailCommande = $donnees['id'];
			}
		 
		$sql2 = 'INSERT INTO `commande`(`id`, `id_user`, `id_detailCommande`, `date`) VALUES (,'.$user.','.$id_detailCommande.',)'; 	// Ajout d'une ligne dans la table commande
																																		// suivant les informations d'entrées
																																		// Ajout date ???
		$reponse2 = $bdd->prepare($sql2);
		$reponse2 ->execute();

	}
	function deletepanier($user, $product){
		include("modele.php");
		$sql = 'SELECT id FROM detailcommande WHERE id_product='.$product.', id_user='.$user.' ';
		$reponse = $bdd->query($sql);
		while ($donnees = $reponse->fetch())
		{
			$sql2 = 'DELETE FROM `commande` WHERE id_user ='.$user.', id_detailCommande ='.$donnees['id'].'  ';
			$reponse2 = $bdd->prepare($sql2);
			$reponse2 ->execute();
		}
		$sql3 = 'DELETE FROM `detailcommande` WHERE id_product='.$product.', id_user='.$user.' ';
		$reponse3 = $bdd->prepare($sql3);
		$reponse3 ->execute();
	}

	function updatepanier($user, $product, $quantite){
		include("modele.php");
		$sql = 'UPDATE `detailcommande` SET `quantite`=? WHERE id_user='.$user.', id_product='.$product.' '; 
		$reponse = $bdd->prepare($sql);
		$reponse ->execute();
	}

	function affichepanier($user){
		include("modele.php");
		$sql = 'SELECT * FROM commande WHERE id_user='.$user.' ';
		$reponse = $bdd->query($sql);
		while ($donnees = $reponse->fetch())
		{
			$detailCommande = $donnees['id_detailCommande'];
			$sql2 ='SELECT * FROM detailcommande WHERE id_user='.$user.', id='.$detailCommande.' ';
			$reponse2 = $bdd->query($sql2);
			while ($donnees2 = $reponse2->fetch())
			{
				$product = $donnees2['id_product'];
				$sql3 ='SELECT * FROM product WHERE id='.$product.' ';
				$reponse3 = $bdd->query($sql3);
				while ($donnees3 = $reponse3->fetch())
				{
					$id_user=$donnees3['id_user'];
					$sql4 ='SELECT * FROM user WHERE id='.$id_user.' ';
					$reponse4 = $bdd->query($sql4);
					while ($donnees4 = $reponse4->fetch())
					{
						$id_categorie = $donnees3['id_categorie'];
						$sql5 ='SELECT * FROM categorie WHERE id='.$id_categorie.' ';
						$reponse5 = $bdd->query($sql5);
						while ($donnees5 = $reponse5->fetch())
						{
							echo $donnees4['nom'].' '.$donnees4['prenom'].' '.$donnees5['nom'].' '.$donnees3['prix'].' '.$donnees2['quantite'].' ' ;
						}
					}
				}
			}
		}
	}
?>