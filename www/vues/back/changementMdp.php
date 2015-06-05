<?php include("../../modele/sessionStart.php"); ?>

<!DOCTYPE HTML>

<html>
  
  <head>
    <title>Changement mot de passe - Pear2Pear</title>
    <?php include("../frames/head.php"); ?>
    
  </head>

  <body>

    <?php include("../frames/menu.php"); ?>

    <?php include("../../controleurs/changemdpController.php"); 
      $email = $_GET['log'];
    ?>

    <!-- Formulaire de changement de mot de passe -->
    <div class="form">
      <h1> Changement du mot de passe </h1>

        <form method="post" action="../../controleurs/changemdpController.php?log=<?php echo $_GET['log']?>">
  
          <div class="field-wrap">
            <label for="mdp">
              Nouveau mot de passe :
            </label>
            <input type="password" name="mdp">
          </div>

          <div class="field-wrap">
            <label for="mdp2">
              Vérification :
            </label>
            <input type="password" name="mdp2">
          </div>

          <button type="submit" class="button button-block" name "envoyer">Changer</button>

      </form>

      <?php 
        updatepassword($_GET['log']);
      ?>

    </div> <!-- fin de form -->

    <?php include("../frames/footer.php"); ?>
  </body>
</html>



