<?php include("/modele/sessionStart.php"); ?>

<!DOCTYPE HTML>
<?php include('/modele/modele.php');?>

<html>
	
	<head>
		<title>Connexion - Pear2Pear</title>
		<?php include("../frames/head.php"); ?>
		
	</head>

	<body>

		<?php include("../frames/menu.php"); ?>
		
      
     <div  class="form">

		<ul class="tab-group">
			<li class="tab active"><a href="#signup">S'inscrire</a></li>
			<li class="tab"><a href="#login">Connexion</a></li>
		</ul>

		<div class="tab-content">
			<div id="signup">
				<h1> Inscrives-vous gratuitement </h1>
   
			<form method="post" action="/controleurs/inscriptionController.php">

				<div class="top-row">
					<div class="field-wrap">
						<label>Nom<span class="req">*</span>: 
						</label>
						<input type="text" name="nom" required />
					</div>
					<div class="field-wrap">
						<label>Prenom<span class="req">*</span>: 
						</label>
						<input type="text" name="prenom" required />
					</div>
				</div><!-- div top-row -->

					<div class="field-wrap">
						<label>Date de naissance<span class="req">*</span>:
						</label>
						 <input type="date" name="born" required />
					</div>

					<div class="field-wrap">
						<label>Email<span class="req">*</span>: 
						</label>
						<input type="text" name="email" required />
					</div>

					<div class="field-wrap">
						<label>Mot de passe<span class="req">*</span>: 
						</label>
						<input type="password" name="mdp" required />
					</div>

					<div class="field-wrap">
						<label>Confirmation du mot de passe<span class="req">*</span>: 
						</label>
						<input type="password" name="mdp2" required />
					</div>

					<div class="field-wrap">
						<label>Adresse<span class="req">*</span>: 
						</label>
						<input type="text" name="adresse" required />
					</div>

					<div class="field-wrap">
						<label>Code postal<span class="req">*</span>: 
						</label>
						<input type="text" name="cdp" required />
					</div>

					<div class="field-wrap">
						<label>Ville<span class="req">*</span>: 
						</label>
						<input type="text" name="ville" required />
					</div>

					<div class="field-wrap">
						<label>Telephone<span class="req">*</span>: 
						</label>
						<input type="text" name="telephone" required />
					</div>
					

					<!-- créer une grosse case, séparer en deux où dans l'une des case on a un beau bouton pour importer une image et l'autre pour drag & drop une image -->
					<div class="field-wrap">
						<label>Image<span class="req">*</span>: 
						</label>
						<input type="text" name="image" required />
					</div>

					<button type="submit" class="button button-block" />S'inscrire</button>
			<?php include("/controleurs/inscriptionController.php"); ?>
			</form>
	</div> <!--div signup -->

	<div id="login">   
          <h1>Re-bonjour</h1>
          
          <form action="/controleurs/connexionController.php" method="post">
          
            <div class="field-wrap">
            	<label>
              		Adresse email<span class="req">*</span>:
            	</label>
            	<input type="email" name="email" required autocomplete="off"/>
          	</div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>:
            </label>
            <input type="password" name="mdp" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div> <!-- div login -->
        
      </div><!-- tab-content -->
      
</div> <!-- form -->
	
		<!-- contenu de notre site -->

		<?php include("../frames/footer.php"); ?>

	</body>

</html>


<!-- 

<label for="image">Image (JPG, PNG ou GIF | max. 100 Ko) :</label><br />
<input type="hidden" name="MAX_FILE_SIZE" value="100000">
<input type="file" name="image" id="image" /><br /> 
	<?php 
	//	include("../controleurs/ajoutimageController.php");
	// 	 ajout_image(user);
	 ?>

-->