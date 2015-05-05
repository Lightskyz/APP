<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=pear;charset=utf8','root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>
<html lang="fr-FR, en-US">
    <head>

      <title> Module d'inscription </title>

      <!-- MetaDonnées -->  
      <meta charset = "utf-8">
      <meta name="description" content="Module d'inscription">
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
      <p>
      	<?php
      	if(!isset($_POST['nom'])){
      	echo'
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

<?php

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['passe']) && !empty($_POST['passe2']) && $_POST['passe'] == $_POST['passe2']){
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email     = $_POST["email"];
  $born = $_POST["born"];
  $passe      = sha1($_POST["passe"]);
$req = $bdd->prepare('INSERT INTO user(nom, prenom, email, passe, born) VALUES(:nom, :prenom, :email, :passe, :born)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'email' => $email,
'passe' => $passe,
'born' => $born
));
echo'<p>Vous êtes inscrit</p>';
}
elseif(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['passe'])){
	echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="./test.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

}
elseif($_POST['passe'] != $_POST['passe2']){
		echo '<p>Les mots de passe ne corespondent pas
		Cliquez <a href="./test.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

	}


?>



<!--if (isset($_POST['valider']) && $_POST['passe'] == $_POST['passe2'])
//{

//print ("<script language = \"JavaScript\">"); 
//print ("location.href = 'index.php';"); 
//print ("</script>");

//}
//if(empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['email']) && empty($_POST['passe']) && empty($_POST['passe2']))-->



