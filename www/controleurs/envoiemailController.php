<!DOCTYPE html>
<?php

// #Intégration - Partie Dadou - Envoie d'un email/Activation du compte

  include('../modele/modele.php');

  echo '<html lang="fr-FR, en-US">
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
        </head>';

	//récupération des variables nécessaire à l'activation
	$email = $_GET['email'];
	$cle = $_GET['cle']; 

	//récup de la clé correspondante au $email dans la BDD//
	$stmt = $bdd->prepare("SELECT cle,actif FROM user WHERE email like :email ");
	if($stmt->execute(array(':email' => $email)) && $row = $stmt->fetch()) 
	{
    $clebdd = $row['cle'];	//récup de la clé//
    $actif = $row['actif']; //$actif contiendra alors 0 ou 1//
  	}
  	if($actif == '1') //si le compte est déjà actif, on prévient//
  	{
     echo "Votre compte est déjà actif !";
  	}
	else //si ce n'est pas le cas on passe aux comparaisons//
  	{
     if($cle == $clebdd) //on compare nos deux clés//	
       {
          //si elles correspondent on active le compte//
          echo "Votre compte a bien été activé !";
 
          //la requête qui va passer notre champ actif de 0 à 1//
          $stmt = $bdd->prepare("UPDATE user SET actif = 1 WHERE email like :email ");
          $stmt->bindParam(':email', $email);
          $stmt->execute();
       }
     else //si les deux clés sont différentes on provoque une erreur//
       {
          echo "Erreur ! Votre compte ne peut être activé...";
       }
  	}
?>

<?php

// #Intégration - Partie Dadou - Envoie d'un email à mettre dans le controleur de la connexion

// On récupérer les variables nécessaires à la vérification du champ 'actif' de la BDD
        $nom = $_POST['email'];
//récup de la valeur du champ 'actif' pour le login $nom//
        $stmt = $bdd->prepare('SELECT actif FROM user WHERE email like :email ');
            if($stmt->execute(array(':email' => $email))  && $row = $stmt->fetch())
            {
                $actif = $row['actif']; // $actif contiendra alors 0 ou 1
            }
//on teste la valeur du champ 'actif' pour savoir si le compte est valide ou non//
            if($actif == '1') //on autorise la connexion
            {
//CONNEXION
                echo 'Vous êtes connecté.';
            }
            if($actif == '0') //on refuse la connexion
            {
//PAS DE CONNEXION, LE COMPTE N'EST PAS ACTIF
                echo 'Votre compte n\'est pas actif.';
            }
?>