<!DOCTYPE html>
	<html lang="fr-FR">
		<head>
			<title>Accueil - Pear2Pear</title>

		<!-- MetaDonnées -->
			<meta charset="utf-8">

		<!-- Stylesheet -->
			<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<!-- Favicon -->

		<!-- Polices supplémentaires -->

		<!-- Javascript nécessaire dans le code -->
			<script src="assets/js/jQuery.js"></script>

			
		</head>




		<body>
			<header>

				<h1 id="pear"> Pear2Pear </h1>

				<i><img src="assets/img/pear2pear.svg" alt="logo" height="150"></i>
				
				<!-- Partie vu si et seulement si l'individu n'est pas connecté, à remplacer par le nom de l'utilisateur et sa photo lorsqu'il se connecte, trouver un moyen de faire apparaitre cette partie si et seulement si il n'est pas connecté sinon affiché le bon truc... Mettre du code php avec des if et echo je pense -->

				<!--
				<?php 
					/* if (statut.utilisateur="0"){
						echo "<nav id="sign">
								<ul>
									<li>Sign in</li>
									<li>Sign up</li>
								</ul>
							</nav>"
					}
					else if(statut.utilisateur="1"){
						echo "<a>
								<img src="adresse_de_limage_sur_le_serveur" alt="user_pic">
								<span>On récupere le nom de l'utilisateur connecté
								</span>
							</a>"
					} */
				?>
				-->
	
				<script type="text/javascript">(function() {  
   					 var dialog = document.getElementById('connexion');  
    				 document.getElementById('signin').onclick = function() {  
        				dialog.show();  
    				};  
    				 document.getElementById('exit').onclick = function() {  
        			 dialog.close();  
    				};  
					})();
				</script>
				

				<nav id="sign">
					<ul>
						<a id="signin"><li>Sign in</li></a>
						<li><a id"signup">Sign up</a></li>
					</ul>
				</nav>

				<dialog id="connexion">
					<form method="post">

					<p>
						<label>Nom d'utilisateur :</label>
						<input type="text" name="user" placeholder="User" />

						<br />

						<label> Mot de passe : </label>
						<input type="password" name="pass" placeholder="Password" />

						<br />

						<input type="submit" value="Envoyer" />

					</p>
					</form>

					<button id="exit">Close Dialog</button>
				</dialog>


				<nav id="menu">
					<ul>
						<li>Achat</li>
						<li>Echange</li>
						<li>Recette</li>
						<li>Forum</li>
						<li>Contact</li>
					</ul>
				</nav>
				
				<form action="action_page.php" autocomplete="on">
				Recherche : <input type="search" name="search" placeholder="Recherche"><br />
				</form>

			</header>

			<section>

			</section>

			<footer>

			</footer>
			
			
			<script src="assets/js/script.js"></script>

		</body>




	</html>

