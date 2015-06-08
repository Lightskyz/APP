<?php

include('../../modele/modele.php');

/*
	Payraudeau Maxime
*/
function create_categorie(){					// Fonction pour ajouter une categorie dans la base de donnee
	
	include ('../../modele/modele.php');		// On include le modele pour avoir acces a la bdd

	if(!empty($_POST['nom']) ) {				// On recupere le post "nom" du formulaire de la vue
		$nom = $_POST['nom'];					// On assigne le post a la variable $nom
			$sql2 = 'INSERT INTO categorie(nom) VALUES ( :nom ) ';			// Requete SQL pour inserer un nouvel element dans la table categorie
			$req = $bdd->prepare($sql2);									// On prepare la requete SQL
			$req -> bindParam(':nom' , $nom );								// On associe la donnee :nom a la variable $nom
			$req->execute();												// On execute la requete SQL
			echo "La categorie ".$nom." à bien été crée.";					// On affiche que la categorie a bien ete cree
	}
}

/*
	Payraudeau Maxime
*/
function delete_categorie($categorie){			// Fonction pour supprimer une categorie de la base de donnee avec pour argument $categorie

	include ('../../modele/modele.php');		// On include le modele pour avoir acces a la bdd

	$sql = 'SELECT * FROM categorie WHERE nom = "'.$categorie.'" ';	// Requete SQL pour selectionner tout les elements de la table categorie qui ont pour nom la valeur de la variable $categorie
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())								// Mise en forme des résultats sous la forme de tableau
		{
				if($donnees['vide'] == '0'){						// Pour chaque element, on regarde avec un if si l'élement a pour son attribut vide egal a zero
					$sql2 = 'DELETE FROM categorie WHERE nom = "'.$categorie.'" ';		// Si il est egal a zero, alors on delete la categorie avec pour nom $categorie
					$req2 = $bdd -> prepare($sql2);										// On prepare la requete SQL
					$req2 -> execute();													// On execute la requete SQL
					echo "La catégorie ".$categorie." à été supprimée." ;				// On affiche que la categorie a bien ete cree
				} else {											// Si son attribut n'est pas egal a zero, alors on affiche que la categorie n'est pas vide ( qu'il y a des produit en vente de cette categorie )
					echo "La categorie n'est pas vide.";
				}
		}
}

/*
	Payraudeau Maxime
*/
function voir_categorie(){						// Fonction pour voir l'ensemble des categorie presente dans notre base de donnee

		include('../../modele/modele.php');		// On include le modele pour avoir acces a la bdd

		$sql = ' SELECT * FROM categorie ORDER BY nom ASC ';	// Requete SQL pour selectionner tout les elements de la table categorie et les ordonner par ordre de nom ascendant
		$req = $bdd -> query($sql);								// On execute la requete
		while ($donnees = $req->fetch())						// On liste les elements sous forme d'un tableau
			{
				$name = " ".$donnees['nom']." ";				// Pour chaque element, on affiche le nom de l'element 
				echo "<div id='listuser'>Nom : ".$name."";
			}
	}

	/* Ajout d'un utilisateur */
	if(!empty($_POST['nom1']) && !empty($_POST['prenom1']) && !empty($_POST['email1']) && !empty($_POST['passe1']) && !empty($_POST['adresse1']) && !empty($_POST['cdp1']) && !empty($_POST['born1'])) {

		// Pour chaque champ de formulaire, on verifie qu'il n'est pas vide 
		// On stock les valeur du formulaire au sein de variable local
		$nom1=$_POST['nom1'];
		$prenom1=$_POST['prenom1'];
		$born1=$_POST['born1'];
		$email1=$_POST['email1'];
		//cryptage du mdp
		$passe1=sha1($_POST['passe1']);
		$adresse1=$_POST['adresse1'];
		$cdp1=$_POST['cdp1'];
		
		$req = $bdd -> prepare ('INSERT INTO user(nom, prenom, born, email, passe, adresse, cdp) VALUES(:nom, :prenom, :born, :email, :passe, :adresse, :cdp)'); // On prepare la requete SQL pour inserer un utilisateur dans la table user avec les elements retourner par le formulaire de la vue

				$req -> execute (array(
					':nom'=>$nom1,
					':prenom'=>$prenom1,
					':born'=>$born1,
					':email'=>$email1,
					':passe'=>$passe1,
					':adresse'=>$adresse1,
					':cdp'=>$cdp1
					));	// On l'executre

		echo 'L\'utilisateur a bien été ajouté.'; // On affiche que l'utilisateur a bien ete ajoute
	}

	//"supprimer" avec formulaire fonctionne => on va le faire avec une fonction qui récupère l'ID de l'user//
/*
	Payraudeau Maxime
*/	
	function delete_user(){ 		// Fonction pour supprimer un utilisateur

	include("../../modele/modele.php"); 	// On include le modele pour avoir acces a la bdd
	
		$id = $_GET['delete2'];				// On utilise l'URL pour recuperer la valeur de la variable delete2 et la stocker dans la varieble id
		$sql = 'DELETE FROM user WHERE id = "'.$id.'" ';		// On supprime l'utilisateur de la table user qui a pour id la valeur de la variable $id
		$req = $bdd -> prepare($sql);							// On prepare la requete SQL
		$req -> execute();										// On execute la requete SQL
		echo "Veuillez actualiser votre page internet.";		// On affiche a l'utilisateur d'actualiser sa page web pour voir les changements.
}

/*
	Payraudeau Maxime
*/
function ban_user(){				// Fonction pour ban un utilisateur

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$id = $_GET['ban'];						// On utilise l'URL pour recuperer la valeur de la variable ban et la stocker dans la varieble id

	$sql2 = ' UPDATE user SET isAdmin = 10 WHERE id = "'.$id.'" ';	// On update l'utilisateur de la table user qui a pour id la valeur de la variable id en lui assignant isAdmin a 10
	$req2 = $bdd -> prepare($sql2);									// On prepare la requete SQL
	$req2 -> execute();												// On execute la requete SQL
	echo "L'utilisateur d'ID = ".$id." à été banni" ;				// On affiche que l'utilisateur a bien ete banni
	echo "Veuillez actualiser votre page internet.";				// On affiche a l'utilisateur d'actualiser sa page web pour voir les changements.
}

/*
	Payraudeau Maxime
*/
	function voir_utilisateur(){		// Fonction pour voir l'ensemble des utilisateurs

		include('../../modele/modele.php');		// On include le modele pour avoir acces a la bdd

		$sql = ' SELECT * FROM user WHERE isAdmin != 10 AND isAdmin != 1 ORDER BY nom ASC';			// On selectionne l'ensemble des user qui on isAdmin different de 10 et de 1 ( qui ne sont ni admin ni bannis.)
		$req = $bdd -> query($sql);																	// On execute la requete SQL
		while ($donnees = $req->fetch())												// On met les resultats sous forme de tableau
			{

				//Ancienne vue

				/*
				$name = " ".$donnees['nom']." ";
				$firstname = " ".$donnees['prenom']." ";
				echo "<div id='listuser'>Nom : ".$name." | Prénom :".$firstname."</div><br />";
				*/

				//Vue Maxime

				$name = $donnees['nom'];			// On assigne les valeurs retourner par la requete SQL a des variables locale
				$id = $donnees['id'];?>
				<div class="form"><?php
				echo "<p style='color:white'>Nom : ".$donnees['nom']." | Prénom ".$donnees['prenom']." </p><br />";
				?>
				<form action="<?php echo "admin.php?delete2=".$id." "; ?> " method="POST">									<!-- On cree un formulaire avec un bouton pour mettre a jour la valeur de la variable delete2 si on clique dessus -->
					<button class="button button-block" type="submit" name="changer" value="Delete">Supprimer</button>
				</form>
				<form action="<?php echo "admin.php?ban=".$id." "; ?> " method="POST">										<!-- On cree un formulaire avec un bouton pour mettre a jour la valeur de la variable ban si on clique dessus -->
					<button class="button button-block" type="submit" name="changer2" value="Ban">Bannir</button>
				</form> </br> 
				</div><?php
			}
	}

/*
	Payraudeau Maxime
*/
function voir_commande(){			// Fonction pour voir l'ensemble des commandes actuellement en cours

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$sql = ' SELECT * FROM commande ORDER BY id_user ASC ';		// Ensemble de requete SQL nous permettant d'obtenir l'ensemble des informations necessaire a l'affichage de la commande
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())
			{
				$sql2 = ' SELECT * FROM user WHERE id = "'.$donnees['id_user'].'" ';
				$req2 = $bdd -> query($sql2);
				while ($donnees2 = $req2->fetch())
				{
					$sql3 = ' SELECT * FROM detailcommande WHERE id = "'.$donnees['id_detailCommande'].'" ';
					$req3 = $bdd -> query($sql3);
					while ($donnees3 = $req3->fetch())
					{
						$sql4 = ' SELECT * FROM produit WHERE id = "'.$donnees3['id_product'].'" ';
						$req4 = $bdd -> query($sql4);
						while ($donnees4 = $req4->fetch())
						{
							$sql5 = ' SELECT * FROM user WHERE id = "'.$donnees4['id_user'].'" ';
							$req5 = $bdd -> query($sql5);
							while ($donnees5 = $req5->fetch())
							{
								$sql6 = ' SELECT * FROM categorie WHERE id = "'.$donnees4['id_categorie'].'" ';
								$req6 = $bdd -> query($sql6);
								while ($donnees6 = $req6->fetch())
								{
									echo " Vendeur : ".$donnees5['nom']." ".$donnees5['prenom']." Produit : ".$donnees6['nom']." Quantité : ".$donnees3['quantite']." Acheteur : ".$donnees2['nom']." ".$donnees2['prenom']. "</br>";
									// On affiche l'ensemble de ces informations
								}
							}
						}
					}
				}
			}
		}

/*
	Payraudeau Maxime
*/
function ajout_forum_cat(){			// Fonction pour ajouter une categorie au forum

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$nom = $_POST['nom4'];			// On recupere le nom de la categorie a ajouter
	$sql = 'INSERT INTO forum(nom) VALUES (:nom)';		// Requete SQL pour inserer une nouvelle categorie a la table forum avec pour nom la valeur de la variable $nom
				$req = $bdd->prepare($sql);
				$req -> bindParam(':nom' , $nom );
				$req -> execute(); 
}

/*
	Payraudeau Maxime
*/
function utilisateurs_bannis(){		// Fonction pour voir l'ensemble des utilisateurs qui sont bannis du site

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$sql = 'SELECT * FROM user WHERE isAdmin = 10 ';		// On selectionne l'ensemble des utilisateur de la table user qui ont isAdmin a 10 ( users bannis )
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())
		{
			echo $donnees['nom']." ".$donnees['prenom'];	// On affiches leurs noms et prenoms
		}
}

/*
	Payraudeau Maxime
*/
function voir_messages_contact(){	// Fonction pour afficher l'ensemble des messages postes via la page contact

	include("../../modele/modele.php");		// On include le modele pour avoir acces a la bdd

	$sql = 'SELECT * FROM contact ';
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())
		{
			echo $donnees['message']." ".$donnees['email']." ".$donnees['contenu'];	// On affiches leurs noms et prenoms
		}
}
?>
