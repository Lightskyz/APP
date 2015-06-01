<!-- Créer 2 menus si l'utilisateur est connecté ou non connecté -->

<?php 

session_start();

/* rajouter que la condition si le mec est admin :  && $_SESSION['isAdmin'] == 1*/
if($_SESSION['email'] == TRUE)
	{
		echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="../../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="../front/produit.php">Nos produits</a></li>
				<li><a href="../front/forum.php">Forum</a></li>
				<li><a href="../back/annonce.php">Annonce</a></li>
				<li><a href="../front/contact.php">Contact</a></li>
			</ul>

			<a href="../back/profil.php" class="login_btn">Profil</a>
			<a href="../../controleurs/deconnexionController.php" class="login_btn">Deconnexion</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}
/* else if($_SESSION['email'] == TRUE)
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
			
			<a href="../back/admin.php" class="login_btn" id="admin">ADMIN</a>
			<a href="../back/profil.php" class="login_btn">Profil</a>
			<a href="/controleurs/deconnexionController.php" class="login_btn">Deconnexion</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	} */

else{
	echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="../../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
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




<!-- Créer 2 menus si l'utilisateur est connecté ou non connecté -->

<?php 
/*
session_start();

/* rajouter que la condition si le mec est admin :  && $_SESSION['isAdmin'] == 1*/
/*if($_SESSION['email'] == NULL)
	{
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
elseif($_SESSION['email'] == TRUE)
	{
		if($_SESSION['isAdmin'] == 0 ){
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

			<a href="../back/profil.php" class="login_btn">Profil</a>
			<a href="/controleurs/deconnexionController.php" class="login_btn">Deconnexion</a>
		</nav>
	</div>
</header> <!-- end header section -->';
}
	else($_SESSION['isAdmin'] == 1){
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
			
			<a href="../back/admin.php" class="login_btn" id="admin">ADMIN</a>
			<a href="../back/profil.php" class="login_btn">Profil</a>
			<a href="/controleurs/deconnexionController.php" class="login_btn">Deconnexion</a>
		</nav>
	</div>
</header> <!-- end header section -->';
	}

	}


	

	}

*/ ?>

