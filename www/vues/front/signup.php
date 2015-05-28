<?php include("/modele/sessionStart.php"); ?>

<?php include("/controleurs/connexionController.php"); ?>

<!DOCTYPE HTML>

<html>
    
    <head>
        <title>Profil - Pear2Pear</title>
        <?php include("../frames/head.php"); ?>
        
    </head>
    
    <body>

        <?php include("../frames/menu.php"); ?>

<div id="form_signup">
	<form method="post" action="/controleurs/connexionController.php">
        <fieldset>
        <legend>Connexion</legend>
    <p>
        <label> Email: <input type="text" name="email"/></label><br /><br />
        <label> Mot de passe: <input type="password" name="mdp"/></label><br />
    </p>
        </fieldset>
    <p><input type="submit" value="Se connecter" /></p>
    </form>
</div>

    <?php include("../frames/footer.php"); ?>

    </body>
</html>