<?php
try 
{ $bdd = new PDO('mysql:host=localhost;dbname=pear;charset=utf8','root','');
}
catch(Execption $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>

<?
	if(isset($_POST['recherche']) && $_POST['recherche'] != NULL) {
		mysqli_connect('localhost','root','');
		mysqli_select_db('pear');
		$recherche = mysqli_query("SELECT * FROM nom WHERE categorie LIKE '%$recherche%' ORDER BY id DESC") or die (mysqli_error());
		$nb_resultats = mysql_num_rows($recherche);
		if(($nb_resultats != 0) && ($recherche != null))
		{
			?>
			<p2>Résultats de votre recherche.</p2>
			<p1>Nous avons trouvé 
			<? echo $nb_resultats; 
			?>
			dans notre base de données. Voici les résultats que nous avons trouvées :
			<br/>
			<?
			while($donnees = mysqli_fetch_array($query)) 
			{
				?>
				<a href="nom.php?id=<? echo $donnees['id']; ?>"><? echo $donnees['categorie']; ?></a><br/>
				<?
			} 
			?><br/>
			<a href="recherche_controleur.php">Faire une nouvelle recherche</a></p>
			<?
		} 
		else
		{
			?>
			<p1>Aucun document ne correspond aux termes de recherche spécifiés (<? echo $_POST['recherche']; ?>").
			Suggestions :
			Vérifiez l’orthographe des termes de recherche.
			Utilisez des mots clés plus généraux.
			Spécifiez un moins grand nombre de mots. <a href="recherche_controleur.php">Réessayez</a> </p1>
			<?
		}
		mysqli_close();
		}
	}
	else {
		?>
		<p>Vous allez faire une recherche dans notre Site. Tapez une requête pour réaliser une recherche.</p>
		<form action="recherche_controleur.php" method="Post">
		<input type="text" name="requete" size="10">
		<input type="submit" value="Ok">
		</form>
		<?
	}
?>
