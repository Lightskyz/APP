<?php

/*	Payraudeau Maxime
	28/05/2015
	Version 1.0.1()
*/

/*	Fonction pour ajouter un nouveau produit au panier. 
	28/05/2015
	Version 1.0.1
*/
	function addpanier($user, $product, $quantite, $poids){	// Fonction pour ajouter un produit au panier

		include("../../modele/modele.php");  // Inclue la base de donnée + connexion.
		
		$actif = '1' ;
		$sql = 'INSERT INTO detailcommande(id_product, id_user, quantite, poids, actif) VALUES (:id_product , :id_user , :quantite , :poids, :actif) '; // Ajout d'une ligne dans la table detailCommande 
																													 // suivant les informations entrer dans la fonction panier.
		$reponse = $bdd->prepare($sql);			// Preparation de la requete SQL.
		$reponse -> bindParam(':id_product', $product);
		$reponse -> bindParam(':id_user', $user);
		$reponse -> bindParam(':quantite', $quantite);
		$reponse -> bindParam(':poids', $poids);
		$reponse -> bindParam(':actif', $actif );
		$reponse ->execute();					// Execution de la requete SQL.

		$sql3 = 'SELECT * FROM detailcommande WHERE id_product = "'.$product.'" AND id_user = "'.$user.'" AND quantite = "'.$quantite.'" AND poids="'.$poids.'" AND actif = 1  ';
		$reponse3 = $bdd->query($sql3);
		while ($donnees = $reponse3 -> fetch())		// Mise en forme de tableau.
			{
				$actif = '1' ;
				$id_detailCommande = $donnees['id'];
				$sql2 = 'INSERT INTO commande(id_user, id_detailCommande, date, actif) VALUES (:id_user, :id_detailCommande, CURDATE(), :actif)'; 	// Ajout d'une ligne dans la table commande
																																		// suivant les informations d'entrées
																																		// Ajout date ???
				$reponse2 = $bdd->prepare($sql2);
				$reponse2 -> bindParam(':id_user', $user);
				$reponse2 -> bindParam(':id_detailCommande', $id_detailCommande);
				$reponse2 -> bindParam(':actif', $actif );
				$reponse2 ->execute();
			}
	}

/*	Fonction pour supprimer un produit du panier. 
	28/05/2015
	Version 1.0.1
*/
	function deletepanier($user, $product){		// Fonction pour supprimer un produit du panier

		include("../../modele/modele.php");

		$sql = 'SELECT * FROM detailcommande WHERE id_product= "'.$product.'" AND id_user= "'.$user.'" AND actif = 1';
		$reponse = $bdd->query($sql);
		
		while ($donnees = $reponse->fetch())
		{
			$sql2 = 'DELETE FROM commande WHERE id_user = "'.$user.'" AND id_detailCommande = "'.$donnees['id'].'"  AND actif = 1 ';
			$reponse2 = $bdd->prepare($sql2);
			$reponse2 ->execute();
		}
		$sql3 = 'DELETE FROM detailcommande WHERE id_product= "'.$product.'" AND  id_user= "'.$user.'" AND actif = 1 ';
		$reponse3 = $bdd->prepare($sql3);
		$reponse3 ->execute();

	}

/*	Fonction pour changer une quantite sur un produit. 
	28/05/2015
	Version 1.0.1
*/
	function updatepanier($user, $product, $quantite, $poids){ 		// Fonction pour update la quantite d'un produit au panier

		include("../../modele/modele.php");

		$sql = 'UPDATE `detailcommande` SET `quantite`='.$quantite.', `poids`='.$poids.' WHERE id_user='.$user.' AND id_product='.$product.'  AND actif = 1'; 
		$reponse = $bdd->prepare($sql);
		$reponse ->execute();
	}

/*	Fonction pour affiche de panier. 
	28/05/2015
	Version 1.0.1
*/
	function affichepanier($user){		// Fonction pour afficher l'ensemble des produits du panier

		include("../../modele/modele.php");

		$sql = 'SELECT * FROM commande WHERE id_user="'.$user.'" AND actif = 1 ';
		$reponse = $bdd->query($sql);
		while ($donnees = $reponse->fetch())
		{
			$detailCommande = $donnees['id_detailCommande'];
			$sql2 ='SELECT * FROM detailcommande WHERE id_user = "'.$user.'" AND id = "'.$detailCommande.'" AND actif = 1 ';
			$reponse2 = $bdd->query($sql2);
			while ($donnees2 = $reponse2->fetch())
			{
				$product = $donnees2['id_product'];
				$sql3 ='SELECT * FROM produit WHERE id="'.$product.'" ';
				$reponse3 = $bdd->query($sql3);
				while ($donnees3 = $reponse3->fetch())
				{
					$id_user=$donnees3['id_user'];
					$sql4 ='SELECT * FROM user WHERE id="'.$id_user.'" ';
					$reponse4 = $bdd->query($sql4);
					while ($donnees4 = $reponse4->fetch())
					{
						$id_categorie = $donnees3['id_categorie'];
						$sql5 ='SELECT * FROM categorie WHERE id="'.$id_categorie.'" ';
						$reponse5 = $bdd->query($sql5);
						while ($donnees5 = $reponse5->fetch())
						{
							$data = $donnees2['quantite'];
							$data2 = $donnees2['poids'];
							?>

		<div id="panier">
    		<h1>Panier de <?php echo $_SESSION['nom']; ?> </h1>
    			<div class="panier">
					<ul><!-- Liste des produits ajouter au panier -->
						<li>
							<img src="../../assets/img/products/fraise.jpg" alt="" title="" class="property_img block" /> <!-- Image du produit ajouté au panier -->							
								<div class="information_produit block">
									<span class="quantite_produit"><?php echo $data; ?> </span>
									<span class="nom_produit"><?php echo $donnees5['nom']; ?></span><br /> <!-- Nom du produit -->
									<span class="nom_vendeur">Vendu par : <?php echo $donnees4['nom'].' '.$donnees4['prenom'].''; ?></span><br />

									<div class="formulairePanier">
										<form action="<?php echo "panier.php?product=".$product." "; ?> " method="POST">			<!-- On cree un formulaire qui permet de changer le nombre de produit acheter ou de delete cet item au panier -->
											<label> Quantité </label>
												<input class="quantityPanier" type="number" name="quantite" step="1" placeholder="<?php echo $data; ?>" min="0" />
											<label> Poids </label>
												<input class="poidsPanier" type="number" name="poids" step="1" placeholder="<?php echo $data2; ?>" min="0" />
												
											<input type="submit" name="changer" value="Modifier">
										</form>
									</div>

										<div class="prix_produit"> 
											<?php echo $donnees3['prix']; ?>€/kg
										</div> <!-- fin prix produit, mis en place d'une case -->
										
										<a href="">
											<button class="trash_icon" type="submit" value="Delete" name="changer">
												<i class="fa fa-trash-o fa-2x"></i>
											</button>
										</a>


												
											</div> <!-- fin information_produit -->
										
									</li>

								</ul>

			<span class="totalSpan">TOTAL : </span><div class="total_panier">100€ <!--somme des élements du panier --></div>
			<button type="submit" value="Valider" "name">Acheter/Echanger</button>

    	</div> <!-- fin de classe panier -->
    </div> <!-- fin de id panier -->

	<?php 			
						}
					}
				}
			}
			$panier = $donnees['id'];
			$GLOBALS['panier'] = $panier; 
		}
		
	}

	function facture($user, $id_commande){

		include("../../modele/modele.php");

		// Creation facture
		$sql01 = ' INSERT INTO facture(id_commande, type) VALUES (:id_commande, :type)';
		$req = $bdd -> prepare($sql01);
		$req -> bindParam(':id_commande', $id_commande);
		$req -> bindParam(':type', $type);
		$req -> execute();
		// Fin creation facture

		// Suppression de la quantite acheter
		$sql = 'SELECT * FROM commande WHERE id_user="'.$user.'" AND actif = 1 ';
		$reponse = $bdd->query($sql);
		while ($donnees = $reponse->fetch())
		{
			$detailCommande = $donnees['id_detailCommande'];
			$sql2 ='SELECT * FROM detailcommande WHERE id_user = "'.$user.'" AND id = "'.$detailCommande.'" AND actif = 1 ';
			$reponse2 = $bdd->query($sql2);
			while ($donnees2 = $reponse2->fetch())
			{
				$product = $donnees2['id_product'];
				$sql3 ='SELECT * FROM produit WHERE id="'.$product.'" ';
				$reponse3 = $bdd->query($sql3);
				while ($donnees3 = $reponse3->fetch())
				{
					$quantitenew = $donnees3['quantite'] - $donnees2['quantite'];
					$poidsnew = $donnees3['poids'] - $donnees2['poids'];
					$sql4 = ' UPDATE produit SET quantite = "'.$quantitenew.'" WHERE id = "'.$donnees3['id'].'" ';
					$reponse4 = $bdd->prepare($sql4);
					$reponse4 ->execute();
					$sql5 = ' UPDATE produit SET poids = "'.$poidsnew.'" WHERE id = "'.$donnees3['id'].'" ';
					$reponse5 = $bdd->prepare($sql5);
					$reponse5 ->execute();

					$id_user=$donnees3['id_user'];
					$sql4 ='SELECT * FROM user WHERE id="'.$id_user.'" ';
					$reponse4 = $bdd->query($sql4);
					while ($donnees4 = $reponse4->fetch())
					{
						$id_categorie = $donnees3['id_categorie'];
						$sql5 ='SELECT * FROM categorie WHERE id="'.$id_categorie.'" ';
						$reponse5 = $bdd->query($sql5);
						while ($donnees5 = $reponse5->fetch())
						{
							$sql6 ='SELECT * FROM user WHERE id="'.$user.'" ';
							$reponse6 = $bdd->query($sql6);
							while ($donnees6 = $reponse6->fetch())
							{
								if( $donnees2['quantite'] == 0){
									$var = $donnees2['poids']."kg";
								} else  {
									$var = $donnees2['quantite'];
								}
								$destinataire = $donnees4['email'];
 								$sujet = "Achat de vos produit sur Pear2Pear" ;
 								$entete = "From: contact@lightskyz.com" ;
  
  $message = 'Achat de vos produits '.$donnees5['nom'].' sur Pear2Pear,
 
  Bonjour,

  "'.$var.'" de vos produits "'.$donnees5['nom'].'"ont ete achetés sur <a href="http://www.lightskyz.com">Pear2Pear</a>.
  
  Pour contacter votre acheteur, envoyé lui un email:
  	Son adresse : "'.$donnees6['email'].'"

  L\'équipe de Pear2Pear
 
  ---------------
  Ceci est un mail automatique.
  Merci de ne pas y répondre.';
  
  //envoi du mail
  mail($destinataire, $sujet, $message, $entete) ;


  								$destinataire2 = $donnees6['email'];
 								$sujet2 = "Confirmation de commande" ;
 								$entete2 = "From: contact@lightskyz.com" ;
  
  $message2 = 'Confirmation de commande sur Pear2Pear,
 
  Bonjour,

  Vous avez acheté "'.$var.'" de "'.$donnees5['nom'].'" sur Pear2Pear (http://www.lightskyz.com).
  
  Pour contacter votre vendeur, envoyé lui un email:
  	Son adresse : "'.$donnees4['email'].'"

  L\'équipe de Pear2Pear
 
  ---------------
  Ceci est un mail automatique.
  Merci de ne pas y répondre.';
  
  //envoi du mail
  mail($destinataire2, $sujet2, $message2, $entete2) ;
							}
						}
					}
				}
			}
		}


		$sql02 = 'UPDATE `detailcommande` SET actif = 0 WHERE id_user='.$user.' '; 
		$req1 = $bdd->prepare($sql02);
		$req1 ->execute();
		$sql03 = 'UPDATE `commande` SET actif = 0 WHERE id_user='.$user.' '; 
		$req2 = $bdd->prepare($sql03);
		$req2 ->execute();


	}
?>