<?php

include('../../modele/modele.php');

	function create_categorie(){
	
	include ('../../modele/modele.php');

	if(!empty($_POST['nom']) ) {
		$nom = $_POST['nom'];
			$sql2 = 'INSERT INTO categorie(nom) VALUES ( :nom ) ';
			$req = $bdd->prepare($sql2);
			$req -> bindParam(':nom' , $nom );
			$req->execute();
			echo "La categorie ".$nom." à bien été crée.";
	}
}
function delete_categorie($categorie){
	include ('../../modele/modele.php');
	$sql = 'SELECT * FROM categorie WHERE nom = "'.$categorie.'" ';
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())
		{
				if($donnees['vide'] == '0'){
					$sql2 = 'DELETE FROM categorie WHERE nom = "'.$categorie.'" ';
					$req2 = $bdd -> prepare($sql2);
					$req2 -> execute();
					echo "La catégorie ".$categorie." à été supprimée." ;
				} else {
					echo "La categorie n'est pas vide.";
				}
		}
}

function voir_categorie(){
		include('../../modele/modele.php');

		$sql = ' SELECT * FROM categorie ORDER BY nom ASC ';
		$req = $bdd -> query($sql);
		while ($donnees = $req->fetch())
			{
				$name = " ".$donnees['nom']." ";
				echo "<div id='listuser'>Nom : ".$name."";
			}
	}

	/* Ajout d'un utilisateur */
	if(!empty($_POST['nom1']) && !empty($_POST['prenom1']) && !empty($_POST['email1']) && !empty($_POST['passe1']) && !empty($_POST['adresse1']) && !empty($_POST['cdp1']) && !empty($_POST['born1'])) {
		$nom1=$_POST['nom1'];
		$prenom1=$_POST['prenom1'];
		$born1=$_POST['born1'];
		$email1=$_POST['email1'];
		//cryptage du mdp
		$passe1=sha1($_POST['passe1']);
		$adresse1=$_POST['adresse1'];
		$cdp1=$_POST['cdp1'];
		
		$req = $bdd -> prepare ('INSERT INTO user(nom, prenom, born, email, passe, adresse, cdp) VALUES(:nom, :prenom, :born, :email, :passe, :adresse, :cdp)');
				$req -> execute (array(
					':nom'=>$nom1,
					':prenom'=>$prenom1,
					':born'=>$born1,
					':email'=>$email1,
					':passe'=>$passe1,
					':adresse'=>$adresse1,
					':cdp'=>$cdp1
					));

		echo 'L\'utilisateur a bien été ajouté.';
	}

	//"supprimer" avec formulaire fonctionne => on va le faire avec une fonction qui récupère l'ID de l'user//
	
	function delete_user(){
	include("../../modele/modele.php");
	
		$id = $_GET['delete2'];

		$sql = 'DELETE FROM user WHERE id = "'.$id.'" ';
		$req = $bdd -> prepare($sql);
		$req -> execute();
		echo "Veuillez actualiser votre page internet.";

	/*
	if(!empty($_POST['nom2']) && !empty($_POST['prenom2'])) {

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['born'])) {
		$choix = $_POST['choix'];
		$nom2=$_POST['nom2'];
		$prenom2=$_POST['prenom2'];
		$sql0 = ' SELECT * FROM user WHERE nom = '.$nom2.' AND prenom = '.$prenom2.' ';
		$req0 = $bdd -> query($sql0);
		while( $donnees0 = $req0 -> fetch() ){
			$user = $donnees0['id'];
		}

	if( !empty($_POST['Supprimer']) ){
		$sql1 = ' DELETE FROM `user` WHERE id = '.$user.' ';
		$req1 = $bdd -> prepare($sql1);
		$req1 -> execute();
		echo "L'utilisateur d'ID = ".$user." à été supprimé" ;
	}else{
		$sql2 = ' UPDATE `user` SET isAdmin = 10 WHERE id = '.$user.' ';
		$req2 = $bdd -> prepare($sql2);
		$req2 -> execute();
		echo "L'utilisateur d'ID = ".$user." à été banni" ; 
	}*/
}

function ban_user(){
	include("../../modele/modele.php");

	$id = $_GET['ban'];

	$sql2 = ' UPDATE `user` SET isAdmin = 10 WHERE id = "'.$id.'" ';
	$req2 = $bdd -> prepare($sql2);
	$req2 -> execute();
	echo "L'utilisateur d'ID = ".$id." à été banni" ;
}

	

	function voir_utilisateur(){
		include('../../modele/modele.php');

		$sql = ' SELECT * FROM user WHERE isAdmin != 10 AND isAdmin != 1 ORDER BY nom ASC';
		$req = $bdd -> query($sql);
		while ($donnees = $req->fetch())
			{

				//Ancienne vue

				/*
				$name = " ".$donnees['nom']." ";
				$firstname = " ".$donnees['prenom']." ";
				echo "<div id='listuser'>Nom : ".$name." | Prénom :".$firstname."</div><br />";
				*/

				//Vue Maxime

				$name = $donnees['nom'];
				$id = $donnees['id'];?>
				<div class="form"><?php
				echo "<p style='color:white'>Nom : ".$donnees['nom']." | Prénom ".$donnees['prenom']." </p><br />";
				?>
				<form action="<?php echo "admin.php?delete2=".$id." "; ?> " method="POST">
					<button class="button button-block" type="submit" name="changer" value="Delete">Supprimer</button>
				</form>
				<form action="<?php echo "admin.php?ban=".$id." "; ?> " method="POST">
					<button class="button button-block" type="submit" name="changer2" value="Ban">Bannir</button>
				</form> </br> 
				</div><?php
			}
	}
function voir_commande(){
	include("../../modele/modele.php");

	$sql = ' SELECT * FROM commande ORDER BY id_user ASC ';
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
								}
							}
						}
					}
				}
			}
		}

function ajout_forum_cat(){
	include("../../modele/modele.php");
	$nom = $_POST['nom4'];
	$sql = 'INSERT INTO `forum`(`nom`) VALUES (:nom)';
				$req = $bdd->prepare($sql);
				$req -> bindParam(':nom' , $nom );
				$req -> execute(); 
}

function utilisateurs_bannis(){
	include("../../modele/modele.php");

	$sql = 'SELECT * FROM user WHERE isAdmin = 10 ';
	$req = $bdd -> query($sql);
	while ($donnees = $req->fetch())
		{
			echo $donnees['nom']." ".$donnees['prenom'];
		}
}
?>
