<?php 
function redirection(){
    header("Location: ../index.php");
    exit; 
}
?>

<?php include('../modele/modele.php'); ?>

<?php

$success = 'Vous êtes connecté :)';
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





if(!$resultat) {
    echo $erreur;
    echo'<br>Veuillez cliquer <a href="../vues/login.php">ici</a></br>.';
}

else {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mdp'] = sha1($_POST['mdp']);        
    console.log($success);

}

}
else {
    echo $erreur1;
    echo'Veuillez cliquer <a href="../vues/login.php">ici</a><br />';
    
}
	
?>

</html>