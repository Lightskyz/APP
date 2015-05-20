<?php
	echo'<html lang="fr-FR, en-US">
    <head>

      <title> Module d\'inscription </title>

      <!-- MetaDonnées -->  
      <meta charset = "utf-8">
      <meta name="description" content="Module d\'inscription">
 <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
     <![endif]-->

      <!-- CSS -->
      <link rel=\"stylesheet\" href=\"css/style.css\">

      <!-- Police supplémentaire -->
   
    </head>'

    
?>
<?php
      	if(!isset($_POST['nom'])){
      	echo'<body>
      <header>
        <h1> Pear2Pear </h1>
      </header>
      <p>
      <div  id="formulaire_inscription">
        <h2> Module d\'inscription </h2>
      <p>Inscrivez-vous en completant le formulaire ci-dessous</p>
<form method="post">
<label>Nom: <input type="text" name="nom"/></label><br/>
<label>Prenom: <input type="text" name="prenom"/></label><br/>
<label>Email: <input type="text" name="email"/></label><br/>
<label>Date de naissance : <input type="date" name="born"/></label><br/>
<label>Mot de passe: <input type="password" name="passe"/></label><br/>
<label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>


<input type="submit" value="S\'inscrire"/>
</form>

</div>
</body>
</html>';
		}
?>


