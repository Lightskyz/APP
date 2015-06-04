<?php 

include('../../controleurs/profilController.php');
afficheprofil($_SESSION['email']);


// Menu pour les admins du site
if($_SESSION['email'] == TRUE && $_SESSION['isAdmin'] == 1 && $_SESSION['actif'] == 1)
	{
		echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="../../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="../front/produit.php">Les produits</a></li>
				<li><a href="../front/forum.php">Forum</a></li>
				<li><a href="../back/annonce.php">Annonce</a></li>
			</ul>
			
			<a href="../../controleurs/deconnexionController.php" class="login_btn2"><i class="fa fa-power-off"></i></a>
			<a href="../back/admin.php" class="login_btn" id="admin">ADMIN</a>
			<a href="../back/profil.php" class="login_btn">Profil</a>
			
			
		</nav>
	</div>
</header> <!-- end header section -->';

	}

// Menu pour les utilisateurs du site
elseif($_SESSION['email'] == TRUE && $_SESSION['actif'] ==1)
	{
		echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="/assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="../front/index.php">Accueil</a></li>
				<li><a href="../front/produit.php">Les produits</a></li>
				<li><a href="../front/forum.php">Forum</a></li>
				<li><a href="../back/annonce.php">Annonce</a></li>
			</ul>
			
			
			<a href="../../controleurs/deconnexionController.php" class="login_btn2"><i class="fa fa-power-off"></i></a>
			<a href="../back/panier.php" class="login_btn2"><i class="fa fa-shopping-cart"></i></a>
			<a href="../back/profil.php" class="login_btn">Profil</a>
			
		</nav>
	</div>
</header> <!-- end header section -->';

	}

//Si le compte n'est pas encore activé

elseif($_SESSION['email'] == TRUE)
	{
		echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="/assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>
		<nav>
			<ul>
				<li><a href="../front/index.php">Accueil</a></li>
				<li><a href="../front/produit.php">Les produits</a></li>
				<li><a href="../back/annonce.php">Poster une annonce</a></li>
			</ul>
			
			
			<a href="../../controleurs/deconnexionController.php" class="login_btn2"><i class="fa fa-power-off"></i></a>
			<a href="../back/profil.php" class="login_btn">Profil</a>
			
		</nav>
	</div>
</header> <!-- end header section -->
<p id="nonactif">Vous êtes inscrit ! Bievenue ! Veuillez activer votre compte en confirmant votre adresse mail, vérifier vos emails</p>';
}

// Menu pour les non-utilisateurs du site

else
{
	echo'<header>
	<div class="wrapper">
		<a href="/index.php"><img src="../../assets/img/pear2pear.svg" class="logo" alt="logo" height ="100px" title="logo" /></a>
		<a href="#" class="hamburger"></a>

		<nav>
			<ul>
				<li><a href="../front/index.php">Accueil</a></li>
				<li><a href="../front/produit.php">Les produits</a></li>
				<li><a href="../front/contact.php">Contact</a></li>
			</ul>
			
			<a href="../front/signin.php" class="login_btn">Sign in</a>
		</nav>
	</div>
</header> <!-- end header section -->';

	}

?>