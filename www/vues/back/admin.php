<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<?php include("../../controleurs/adminController.php");?>

<html>
    
    <head>
        <title>Admin - Pear2Pear</title>
        <?php include("../frames/head.php"); ?>
        
    </head>

    <body>

        <?php include("../frames/menu.php"); ?>

    <h3>Back office admins</h3>

    <!-- Premiere case pour ajouter une catégorie -->
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
            include("../../controleurs/ajoutimageController.php");
            ajout_image();
        }
        ?>

    <!-- Deuxieme case pour supprimer une catégorie -->
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

    <!-- 3eme case gestion des utilisateurs -->

    <h4>Gestion des utilisateurs</h4>
    	<ul>
    		<li>Ajout d'un utilisateur</li>
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
                    <input type="submit" name="submit3" value="Supprimer"></br>
                    <input type="submit" name="submit4" value="Ban"></br>
                </form>
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

        <?php 
        if(!empty($_POST['nom4'])){
             ajout_forum_cat();
        }
        ?>
  		<p>Faire le forum d'abord.</p>
  </body>
</html>