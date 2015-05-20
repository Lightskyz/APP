<?php
include("BDD.php");
?>
<?php
echo'	<html lang="fr-FR, en-US">
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
</body>'
?>
<?php
   if (isset($_POST['nom']) && !empty($_POST['passe']))  
    {
        if ( isset($_POST['passe']))
        {
            $nom = htmlspecialchars($_POST["nom"]);
            // Criptage du mot de passe
            $passe = sha1($_POST['passe']);
            // Vérification des identifiants
                $req = $bdd->prepare('SELECT id FROM user WHERE nom = :nom AND passe = :passe');
                $req->execute(array(
                    'nom' => $nom,
                    'passe' => $passe));
                $resultat = $req->fetch();

        }
        if (!$resultat)
        {
            echo 'Mauvais identifiant ou mot de passe ! Veuillez cliquer <a href="./ConnexionC.php">ici</a>';
        }

        else
        {
            echo 'Vous êtes connecté !';
		}
	}
	else {
		echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="./test.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';
	}
	
            ?>
			<?php
include("ConnexionV.php");
?>
  
