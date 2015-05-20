<?php
if(!isset($_POST['login'])&&!isset($_POST['pass'])){
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
    <label> Email: <input type="text" name="email"/></label><br /><br />
    <label> Mot de passe: <input type="password" name="pass"/></label><br />
    </p>
	</fieldset>
    <p><input type="submit" value="Se connecter" /></p></form>
	</html>';

}
?>