<?php
try
{
    $bdd = new PDO('mysql:host=localhost:8889;dbname=pear;charset=utf8','root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>




<!doctype html>
<html lang="fr-FR, en-US">
    <head>

      <title> Module d'inscription </title>

      <!-- MetaDonnées -->  
      <meta charset = "utf-8">
      <meta name="description" content="Module d'inscription">
      <meta name="author" content="LightSkyz">
      
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

      <div id="formulaire_inscription">
        <h2> Module d'inscription </h2>
      <p>Inscrivez-vous en completant le formulaire ci-dessous</p>
      
      <form method='post'>
        <label> Nom: <input type="text" name="nom"/></label><br />
        <label> Prenom: <input type="text" name="prenom"/></label><br />
        <label> Mail: <input type="text" name="email"/></label><br />
        <label> Verification de mail: <input type="text" name="email2" /></label><br />
        <label> Adresse: <input type="text" name="adresse"/></label><br />
        <label> Code Postal: <input type="text" name="cdp"/></label><br />
        <label> Ville: <input type="text" name="ville"/></label><br />
        <label> Pays: <input type="text" name="pays"/></label><br />
        <label> Telephone: <input type="text" name="telephone"/></label><br />
        <label> Date de naissance: <input type="date" name="born"/></label><br />
        <label> Mot de passe: <input type="password" name="passe"/></label><br />
        <label> Verification de mot de passe: <input type="password" name="passe2"/></label><br />
        <input type="submit" value="S'inscrire" />
       </form>
    </div>
  </body>
</html>   

<?php
if(!empty($_POST['nom'])){
  $passe = mysql_real_escape_string(htmlspecialchars($_POST['passe']));
  $passe2 = mysql_real_escape_string(htmlspecialchars($_POST['passe2']));

  if($passe == $passe2){
    $nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
    $prenom = mysql_real_escape_string(htmlspecialchars($_POST['prenom']));
    $adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
    $email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
    $email2 = mysql_real_escape_string(htmlspecialchars($_POST['email2']));
    $adresse = mysql_real_escape_string(htmlspecialchars($_POST['adresse']));
    $cdp = mysql_real_escape_string(htmlspecialchars($_POST['cdp']));
    $ville = mysql_real_escape_string(htmlspecialchars($_POST['ville']));
    $pays = mysql_real_escape_string(htmlspecialchars($_POST['pays']));
    $telephone = mysql_escape_string(htmlspecialchars($_POST['telephone']));
    $born = mysql_real_escape_string(htmlspecialchars($_POST['born']));

    $passe = sha1($passe);

    mysql_query("INSERT INTO user VALUES('','$nom','$prenom','$adresse','$email2','$cdp','$ville','$telephone','$statut','$email','','$passe','$pass2','$born','$pays')");
    
  } else{
    echo 'Les deux mots de passe que vous avez rentrés ne correpondent pas.';
  }

}
?>
