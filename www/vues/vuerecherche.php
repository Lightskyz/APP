<?php

include("controleurrecherche.php");
?>
	<p>Vous allez faire une recherche dans notre site.</p><p>Tapez une requête pour réaliser votre recherche.</p>								
	<form action="" method="POST">
	<input type="text" name="recherche" placeholder="Recherche" size="10">
	<input type="submit" value="Ok">
	</form>
	<?php
	if(!empty($_POST['recherche'])){
		$requete = $_POST['recherche'];
	}
	recherche_crit('categorie', 'nom');
	if(empty($choix)){
		if(!empty($requete)){
			recherche_champ($requete);
		}
	} else if($choix !='Tout les produits'){
		recherche_champ($choix);
	} else {
		recherche_champ("");
	}
	recherche_productbyuser(1,'quantite');
?>
