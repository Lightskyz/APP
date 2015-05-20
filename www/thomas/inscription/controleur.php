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

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['born']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && $_POST['pass'] == $_POST['pass2']){
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email     = htmlspecialchars($_POST["email"]);
  $born = $_POST["born"];
  $pass      = sha1($_POST["pass"]);
$req = $bdd->prepare('INSERT INTO user(nom, prenom, born, email, pass) VALUES(:nom, :prenom, :born, :email, :pass)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'born' => $born,
'email' => $email,
'pass' => $pass
));
echo'<p>Vous êtes inscrit</p>';
}
elseif(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['pass'])|| empty($_POST['born'])){
	echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="./index.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

}
elseif($_POST['pass'] != $_POST['pass2']){
		echo '<p>Les mots de passe ne corespondent pas
		Cliquez <a href="./index.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

	}
?>


