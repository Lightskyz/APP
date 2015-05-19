<!DOCTYPE HTML>
<html>
    
    <head>
        <title>Annonce - Pear2Pear</title>
        <?php include("head.php"); ?>
        
    </head>


<?php include('../modele/modele.php');?>

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
            echo 'Mauvais identifiant ou mot de passe ! Veuillez cliquer <a href="../vues/login.php">ici</a>';
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

            </html>