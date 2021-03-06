<?php 

/* 
    Alexis Monnier
*/
function ajout_image($categorie){ // Fonction pour ajouter une image et ajouter un lien dans la base de donnee vers cette localisation.

  include("../../modele/modele.php");

// On creer le chemin du fichier avec des variable et des extensions.
    $dossier = '../../assets/img/products/';
    $fichier = basename($_FILES['avatar']['name']);
    $taille_maxi = 1000000;
    $taille = filesize($_FILES['avatar']['tmp_name']); // ou  utiliser $_FILES['avatar']['size']; 
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');

//Début des vérifications de sécurité..

    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
         $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if($taille > $taille_maxi) {
         $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) { //S'il n'y a pas d'erreur, on upload

    //On formate le nom du fichier ici
         $fichier = strtr($fichier, 
              'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
              'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); // Permet d'accepter les caracteres speciaux et de les remplacer par des caracteres normaux.
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    // Fin formatage

        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) { //Si la condition renvoie TRUE, c'est que ça a fonctionné
            echo 'Upload effectué avec succès !';

// Partie requete SQL pour ajouter le nom de l'image associer à la categorie
            $sql = ' UPDATE categorie SET image= "'.$fichier.'" WHERE nom = "'.$categorie.'" ';
            $req = $bdd -> prepare($sql);
            $req -> execute();
// Fin de la partie requete SQL

        } else {
            echo 'Echec de l\'upload !';
        }
    } else {
         echo $erreur;
    }
}


function ajout_image2($user){ // Fonction pour ajouter une image et ajouter un lien dans la base de donnee vers cette localisation.

  include("../../modele/modele.php");


// On creer le chemin du fichier avec des variable et des extensions.
    $dossier = '../../assets/img/users/';
    $fichier = basename($_FILES['avatar']['name']);
    $taille_maxi = 1000000;
    $taille = filesize($_FILES['avatar']['tmp_name']); // ou  utiliser $_FILES['avatar']['size']; 
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');

//Début des vérifications de sécurité..

    if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
    {
         $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
    }
    if($taille > $taille_maxi) {
         $erreur = 'Le fichier est trop gros...';
    }
    if(!isset($erreur)) { //S'il n'y a pas d'erreur, on upload

    //On formate le nom du fichier ici
         $fichier = strtr($fichier, 
              'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
              'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy'); // Permet d'accepter les caracteres speciaux et de les remplacer par des caracteres normaux.
        $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
    // Fin formatage

        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) { //Si la condition renvoie TRUE, c'est que ça a fonctionné
            echo 'Upload effectué avec succès !';

// Partie requete SQL pour ajouter le nom de l'image associer à la user
            $sql = ' UPDATE user SET image= "'.$fichier.'" WHERE id = "'.$user.'" ';
            $req = $bdd -> prepare($sql);
            $req -> execute();
// Fin de la partie requete SQL

        } else {
            echo 'Echec de l\'upload !';
        }
    } else {
         echo $erreur;
    }
}
?>
<!-- Formater le nom de l'image avec l'id et le nom de l'utilisateur pour que l'image soit unique -->