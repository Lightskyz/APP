<!-- Créer 2 menus si l'utilisateur est connecté ou non connecté -->

<?php 

session_start();

if($_SESSION['email'] == TRUE)
	{
		echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="/assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="../front/produit.php">Nos produits</a></li>
				<li><a href="../front/forum.php">Forum</a></li>
				<li><a href="../back/annonce.php">Annonce</a></li>
				<li><a href="../front/contact.php">Contact</a></li>
			</ul>

			<a href="../back/profil.php" class="login_btn">Connected</a>
			<a href="/controleurs/deconnexionController.php" class="login_btn">Deconnexion</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}
else{
	echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="/assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>



		<nav>
			<ul>
				<li><a href="../front/produit.php">Nos produits</a></li>
				<li><a href="../front/forum.php">Forum</a></li>
				<li><a href="../front/contact.php">Contact</a></li>
			</ul>
			
			<a href="../front/signin.php" class="login_btn">Sign in</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}

?>