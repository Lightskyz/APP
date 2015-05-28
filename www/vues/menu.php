<?php session_start(); ?>
<!-- Créer 2 menus si l'utilisateur est connecté ou non connecté -->

<?php 
if($_SESSION['email'] == TRUE)
	{
		echo'<header>
	<div class="wrapper">
		<a href="../index.php"><img src="../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="achat.php">Achat</a></li>
				<li><a href="echange.php">Echange</a></li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="annonce.php">Annonce</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			/* Carré où nous récupérons la photo de l\'utilisateur et son prénom nom */

			<a href="profil.php" class="login_btn">Connected</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}
else{
	echo'<header>
	<div class="wrapper">
		<a href="../index.php"><img src="../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>



		<nav>
			<ul>
				<li><a href="achat.php">Achat</a></li>
				<li><a href="echange.php">Echange</a></li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="annonce.php">Annonce</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			
			<a href="signin.php" class="login_btn">Sign in</a>
			<a href="signup.php" class="login_btn">Sign up</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}

?>