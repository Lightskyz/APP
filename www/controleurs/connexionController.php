<?php include('../modele/modele.php'); ?>

<?php

$success = 'Vous êtes connecté :) Cliquez <a href="../index.php">ici</a>';
$erreur = 'Le couple email/mot de passe ne correspond pas.';
$erreur1 = 'Vous n\'avez pas rempli tous les champs.';

if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    $email =($_POST['email']);
    $mdp = sha1($_POST['mdp']);
    $req = $bdd->prepare('SELECT id FROM user WHERE email = :email AND mdp = :mdp');
                $req->execute(array(
                    'email' => $email,
                    'mdp' => $mdp));
                $resultat = $req->fetch();


// #Intégration - Partie Dadou - Envoie d'un email

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


if(!$resultat) {
    echo $erreur;
    echo'<br>Veuillez cliquer <a href="../vues/signup.php">ici</a></br>.';
}

else {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp'] = sha1($_POST['mdp']);        
    echo $success;    
    header('location: ../vues/profil.php');

}

}
else {
    echo $erreur1;
    echo'Veuillez cliquer <a href="../vues/signup.php">ici</a><br />';
    
}
	
?>

</html>