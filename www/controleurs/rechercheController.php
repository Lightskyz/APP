<?php
function recherche_champ($requete) {
include("../modele/modele.php");
	$sql = 'SELECT * FROM categorie WHERE nom LIKE "%'.$requete.'%" ORDER BY id DESC';
	$reponse = $bdd->query($sql);
	while ($donnees = $reponse->fetch())
	{
		?>
		<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">


			<!-- trouver un moyen de faire un FOREACH et de les exposer en liste comme tel, récupérer des informations dans la base de données -->
			
				<li>
					<a href="#"><!-- lien vers le produit -->
						<img src="assets/img/products/fraise.jpg" alt="" title="" class="property_img"/><!-- image du produit -->
					</a>
					<span class="price">ÉPUISÉ</span><!-- quantité ou prix du produit -->
					<div class="property_details">
						<h1>
							<a href="#"><?php echo $donnees['nom']." "; ?></a> <!-- nom du produit -->
						</h1>
						<h2>Origine France<span class="property_size"></span></h2> <!-- détails/disponibilité du produit -->
					</div>
				</li>



			</ul>
		</div>
			</section>	<!--  end listing section  -->

		<?php
	}
	$reponse->closeCursor(); 
}

function recherche_crit($table, $order) {
	include("../modele/modele.php");
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
			<input type="submit" name="submit" value="Go" />
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
	include("../modele/modele.php");
		$sql = 'SELECT * FROM product WHERE id_user LIKE "%'.$user.'%" ORDER BY '.$order.' DESC';
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
