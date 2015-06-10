 
				
	


<section class="search">
	<div class="wrapper">
		<?php

	include("../../controleurs/rechercheController.php");

	recherche_crit('categorie', 'nom');
	if(!empty($_POST['recherche'])){
			$requete = $_POST['recherche'];
			recherche_champ($requete);
	}
	if(empty($choix)){
		
	} else if($choix != 'Tout les produits' ){
		recherche_champ($choix);
	} else {
		recherche_champ("");
	}
	?>
			<form action="" method="post">
				<input type="text" id="search" name="recherche" placeholder="Recherche"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search" value="ok"/>

			</form>	
	</div>
</section>