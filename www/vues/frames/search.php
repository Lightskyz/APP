<?php //include("/controleurs/rechercheController.php"); ?>  

<section class="search">
	<div class="wrapper">
			<form action="" method="post">
				<input type="text" id="search" name="recherche" placeholder="Que recherchez-vous ?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search" value="ok"/>
			</form>		
	</div>
</section>

	
<?php
/*
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
*/
?>