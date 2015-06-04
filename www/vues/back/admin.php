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

    <h1>Back office Administrateur</h1>
    
    <!-- Centrer tous les futurs titres ! -->
    <!-- Premiere case pour ajouter une catégorie -->
    <h3>Ajouter une catégorie</h3>
        <!--formulaire ajout catégorie-->
        <div class="form">    
            <form method="post" action="">
                <div class="field-wrap">
                	<label>
                        Nom du produit
                    </label>
                <input type="text" name="nom"/>
                </div> 

                <div class="field-wrap">
        			<label for="avatar">
                       <!-- Image (JPG, PNG ou GIF | max. 100 Ko) -->
                    </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                    <input type="file" name="avatar" id="avatar" /><br />
        		</div>
        			<button type="submit" name="submit" class="button button-block"/>Ajouter une catégorie</button>
            </form>
                <?php
                if(!empty($_POST['submit'])){
                    create_categorie();
                    include("../../controleurs/ajoutimageController.php");
                    ajout_image();
                }
                ?>
        </div>

    <!-- Deuxieme case pour supprimer une catégorie -->
    <h3>Supprimer une catégorie</h3>
        <!--formulaire ajout catégorie-->
    <div class="form">
        <form method="post" action="">
            <div class="field-wrap">
            <label>
                Nom du produit
            </label>
            <input type="text" name="nom3"/>
        </div>

        <button type="submit" name="submit1" class="button button-block"/>Supprimer</button>                                     
        </form>
        <?php
        if(!empty($_POST['submit1'])){
            delete_categorie($_POST['nom3']);
        }
        ?>
        </div>

    <!-- 3eme case gestion des utilisateurs -->

    <h3>Gestion des utilisateurs</h3>
                <!--formulaire ajout utilisateur-->
            <div class="form">
    			<form method="post" action="">

                    <div class="top-row">
                    <div class="field-wrap">
                        <label>Nom<span class="req">*</span>
                        </label>
                        <input type="text" name="nom" required />
                    </div>
                    <div class="field-wrap">
                        <label>Prenom<span class="req">*</span> 
                        </label>
                        <input type="text" name="prenom" required />
                    </div>
                </div><!-- div top-row -->

    				
                    <div class="field-wrap">
                        <label>Email<span class="req">*</span> 
                        </label>
                        <input type="text" name="email" required />
                    </div>

                    <div class="field-wrap">
                        <label>Mot de passe<span class="req">*</span> 
                        </label>
                        <input type="password" name="mdp" required />
                    </div>

                    <div class="field-wrap">
                        <label>Confirmation du mot de passe<span class="req">*</span> 
                        </label>
                    <input type="password" name="mdp2" required />
                    </div>

                    <div class="field-wrap">
                        <label>Adresse<span class="req">*</span> 
                        </label>
                        <input type="text" name="adresse" required />
                    </div>

                    <div class="field-wrap">
                        <label>Code postal<span class="req">*</span> 
                        </label>
                        <input type="text" name="cdp" required />
                    </div>

                    <div class="field-wrap">
                        <label>Ville<span class="req">*</span> 
                        </label>
                        <input type="text" name="ville" required />
                    </div>

                    <div class="field-wrap">
                        <label>Telephone<span class="req">*</span> 
                        </label>
                        <input type="text" name="telephone" required />
                    </div>


					<button type="submit" class="button button=-black" value="Ajouter"/> Ajouter un utilisateur </button>


    		</form>
        </div>

    		<h3>Suppression d'un utilisateur</h3>
                <!--formulaire suppression utilisateur-->
                <div class="form">
    			     <form method="post" action="">
                        <div class="field-wrap">
                            <label>Nom</br><input type="text" name="nom2"/></label>
                            </br></br>
                        </div>
                        <div class="field-wrap">
                            <label>Prenom</br><input type="text" name="prenom2"/></label>
                            </br></br>
                        </div>
                        <div class="top-row">
                            <button type="submit" name="submit3" class="button button-block">Supprimer</button>
                            <button type="submit" name="submit4" class="button button-block">Ban</button>
                        </div>
                    </form>
                </div>

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

    <div class="form">
        <form method="post" action="">
            <label>
                Nom
            </label>
            <input type="text" name="nom4"/>
        <button type="submit" name="submit5" value="Ajouter">Ajouter</button>
        </form>
    </div>

  </body>
</html>