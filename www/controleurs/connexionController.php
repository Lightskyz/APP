<?php 
include('../modele/modele.php'); 

//Messages
$success = 'Vous êtes connecté :)</a>';
$erreur = 'Le couple email/mot de passe ne correspond pas.';
$erreur1 = 'Vous n\'avez pas rempli tous les champs.';

$email =($_POST['email']);
$mdp = sha1($_POST['mdp']);

$req = $bdd->prepare('SELECT id FROM user WHERE email = :email AND mdp = :mdp');
$req->execute(array(
    'email' => $email,
    'mdp' => $mdp));
$resultat = $req->fetch();

// on teste si nos variables sont définies
if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    
    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    if(!$resultat) {
    // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=/vues/front/signup.php">';
}

    else {
        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mdp'] = $_POST['mdp'];

        // on redirige notre visiteur vers une page de notre section membre
        header ('location: /index.php');
        
        echo'<a href="/index.php">Accueil</a>';


}

}
else {
    echo $erreur1;
    echo'Veuillez cliquer <a href="/vues/signup.php">ici</a><br />';
    
}
    
?>

</html>