<?php
if(!isset($_POST['nom'])&&!isset($_POST['passe'])){
 echo '
	<html lang="fr-FR, en-US">
    <head>

      <title> Module de connexion </title>

      <!-- MetaDonnées -->  
      <meta charset = "utf-8">
      <meta name="description" content="Module de connexion">
      
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
     <![endif]-->

      <!-- CSS -->
      <link rel="stylesheet" href="css/style.css">

      <!-- Police supplémentaire -->
   
    </head>

    <body>
      <header>
        <h1> Pear2Pear </h1>
      </header>
</body>
	<form method="post">
    <fieldset>
    <legend>Connexion</legend>
    <p>
    <label> Nom: <input type="text" name="nom"/></label><br /><br />
    <label> Mot de passe: <input type="password" name="passe"/></label><br />
    </p>
    </fieldset>
    <p><input type="submit" value="Se connecter" /></p></form>
	</html>';
}
?>
