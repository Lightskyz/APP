<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Connexion - Pear2Pear</title>
        <?php include("../frames/head.php"); ?>
        
    </head>
    
    <body>

        <?php include("../frames/menu.php"); ?>

<div id="form_signup">
	<form action="/controleurs/connexionController.php" method="post">
        <h1>Connexion</h1>

            <label> Email: </label><br />
            <input type="text" name="email"><br />

            <label> Mot de passe: </label><br />
            <input type="password" name="mdp"><br />

        <input type="submit" value="Se connecter">
    </form>
</div>

    <?php include("../frames/footer.php"); ?>

    </body>
</html>