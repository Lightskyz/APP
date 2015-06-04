<!DOCTYPE html>
<?php include("backoffice_controleur.php");
?>
<html lang="fr-FR, en-US">
<head>
	<!-- MetaDonnées -->  
	<meta charset = "utf-8">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Police supplémentaire -->
	<title>Back office Pear2Pear</title>
</head>
<body>
    <h3>Back office admins</h3>
    <h4>Ajouter une catégorie</h4>
        <!--formulaire ajout catégorie-->
    	<form method="post" action="">
    		<label>Nom du produit</br><input type="text" name="nom"/></label>
    	</br></br>
			<label for="avatar">Image (JPG, PNG ou GIF | max. 100 Ko) :</label><br />
             <input type="hidden" name="MAX_FILE_SIZE" value="100000">
             <input type="file" name="avatar" id="avatar" /><br />
		</br></br>
			<input type="submit" name="submit" value="Ajouter"/>								    	
    	</form>
        <?php
        if(!empty($_POST['submit'])){
            create_categorie();
            include("ajout_prod.php");
            ajout_image();
        }
        ?>
    <h4>Supprimer une catégorie</h4>
        <!--formulaire ajout catégorie-->
        <form method="post" action="">
            <label>Nom du produit</br><input type="text" name="nom3"/></label>
        </br></br>
        <input type="submit" name="submit1" value="Supprimer"/>                                        
        </form>
        <?php
        if(!empty($_POST['submit1'])){
            delete_categorie($_POST['nom3']);
        }
     ?>

    <h4>Gestion des utilisateurs</h4>
    	<ul>
    		<li>Ajout</li>
				</br>
                <!--formulaire ajout utilisateur-->
    			<form method="post" action="">
    				<label>Nom</br><input type="text" name="nom1"/></label>
    				</br></br>
    				<label>Prenom</br><input type="text" name="prenom1"/></label>
    				</br></br>
    				<label>Email</br><input type="text" name="email1"/></label>
    				</br></br>
    				<label>Mot de passe</br><input type="password" name="passe1"/></label>
    				</br></br>
                    <label>Adresse</br><input type="text" name="adresse1"/></label>
                    </br></br>
    				<label>Code postal</br><input type="number" name="cdp1"/></label>
					</br></br>
					<label>Date de naissance</br><input type="date" name="born1"></label>
                    </br></br>
					<input type="submit" name="submit2" value="Ajouter"/>								    	
    			</form></br>
    		<li>Suppression d'un utilisateur</li>
                </br>
                <!--formulaire suppression utilisateur-->
    			<form method="post" action="">
                    <label>Nom</br><input type="text" name="nom2"/></label>
                    </br></br>
                    <label>Prenom</br><input type="text" name="prenom2"/></label>
                    </br></br>
                    <label>Email</br><input type="text" name="email2"/></label>
                    </br></br>
                    <input type="submit" name="submit3" value="Supprimer"></br>
                    <input type="submit" name="submit4" value="Ban"></br>
                </form>
                <?php
                if(!empty($_POST['nom2']) && !empty($_POST['prenom2']) && !empty($_POST['email2'])) {
                    delete_user();
                }
                ?>
    	</ul>
    <h4>Tout les utilisateurs inscrits</h4>
        <?php 
            voir_utilisateur();
            ?> </br>
    <h4>Tout les utilisateurs bannis</h4>
        <?php 
            utilisateurs_bannis();
            ?> </br>
    <h4>Affichages des commandes</h4>   
            <?php
            voir_commande();
        ?>
    <h4>Créer une categorie forum</h4>


        <form method="post" action="">
            <label>Nom</br><input type="text" name="nom4"/></label>
                    </br></br>
        <input type="submit" name="submit5" value="Ajouter"></br>
        </form>
    </br>
    <h4>Modérer le forum</h4>

        <?php 
        if(!empty($_POST['nom4'])){
             ajout_forum_cat();
        }
        include("forum_vue.php");
        ?>
  		<p>Faire le forum d'abord.</p>
  </body>
</html>