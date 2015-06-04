<?php
function recherche_champ($requete) {
include("../../modele/modele.php");
	$sql2 = 'SELECT COUNT(id) FROM categorie WHERE nom LIKE "%'.$requete.'%" ';
	$count = current($bdd->query($sql2)->fetch());
	echo $count;
	
	$sql = 'SELECT * FROM categorie WHERE nom LIKE "%'.$requete.'%" ORDER BY id DESC';
	$reponse = $bdd->query($sql);
	while ($donnees = $reponse->fetch())
	{
		?>
	<?php echo $donnees['nom']." "; ?>
	
	<?php
	}
	$reponse->closeCursor(); 
}

function recherche_crit($table, $order) {
	include("../../modele/modele.php");
?>

		<form action="" method="POST">
			<select name="liste">
				<option value="Tous les produits" selected="Tous les produits"> Tous les produits </option> 
				<?php
				$sql2 ='SELECT * FROM '.$table.' ORDER BY '.$order.' ASC';
				$list = $bdd->query($sql2);
				while ($data = $list->fetch()){
			     	echo'<option value="'.$data['nom'].'">'.$data['nom'].'</option>';
    			}
			?>
			</select>
			<button type="submit" name="submit">Go</button>
		</form>
		<?php 
		$OK = isset($_POST['Go']) ? $_POST['Go'] : '';
		if (isset($OK))	
		{
			$choix=isset($_POST['liste']) ? $_POST['liste'] : '';
			$GLOBALS['choix'] = $choix; 
		}
}

function recherche_productbyuser($user, $order){
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
