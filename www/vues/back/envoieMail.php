<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
  
  <head>
    <title>Module de connexion - Pear2Pear</title>
    <?php include("../frames/head.php"); ?>
    
  </head>

  <body>

    <?php include("../frames/menu.php"); ?>

    <!-- Formulaire de changement de mot de passe -->
    <div clsass="form">
      <h1> Récupérer votre mot de passe </h1>

        <form method="post" action="envoiemailmdpController.php"><!-- ou envoieControleur - séparer les deux fichiers à voir -->
  
          <div class="field-wrap">
            <label for="email">
              Email :
            </label>
            <input type="text" name="email">
          </div>

          <button type="submit" class="button button-block" name "envoyer">Envoyer</button>

      </form>
    </div> <!-- fin de form -->

    <?php include("../frames/footer.php"); ?>
  </body>
</html>

