<?php
/*

*/
function afficheprofil($user){

	include("../../modele/modele.php");

	$sql = 'SELECT * FROM user WHERE email = "'.$user.'" ';
	$req = $bdd-> query($sql);
	while( $donnees = $req -> fetch())
	{
	 // Association des variable retourner par la bdd aux variables de session
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

function afficheAnnonce($user){

	include("../../modele/modele.php");

	$sql = 'SELECT * FROM produit WHERE id_user LIKE "%'.$user.'%" ORDER BY '.$order.' DESC';
	$reponse = $bdd->query($sql);
	while ($donnees = $reponse->fetch())
	{
		$sql2 = 'SELECT * FROM categorie WHERE id ="'.$donnees['id_categorie'].'" ';
		$reponse2 = $bdd->query($sql2);
		while ($donnees2 = $reponse2->fetch())
		{	
			$sql3 = 'SELECT * FROM user WHERE id ="'.$donnees['id_user'].'" ';
			$reponse3 = $bdd->query($sql3);
			while ($donnees3 = $reponse3->fetch())
			{
				?>
	    		<p>
	    		Vendeur : <?php echo $donnees3['nom']." "; echo $donnees3['prenom'];?> Categorie : <?php echo $donnees2['nom']; ?> Prix : <?php echo $donnees['prix']; ?> Quantité : <?php echo $donnees['quantite']; ?><br />
	   			</p>
				<?php
			}
		}
	}
	$reponse->closeCursor(); 
}
?>