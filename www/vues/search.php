<?php include("../controleurs/rechercheController.php"); ?>

<p>Vous allez faire une recherche dans notre site.</p><p>Tapez une requête pour réaliser votre recherche.</p>	

<!--
<section class="search">
	<div class="wrapper">
			<form action="" method="post">
				<input type="text" id="search" name="search" placeholder="Que recherchez vous ?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>		
	</div>
</section>

-->	
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
