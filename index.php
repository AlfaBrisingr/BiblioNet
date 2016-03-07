<?php
require_once "Classe/Panier/panier.php";
require_once "Classe/Panier/collection.php";
require_once "Classe/Panier/produit.php";
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Date.php";
require_once "Classe/Livre/genre.php";
require_once"Classe/Livre/livre.php";
require_once"Classe/Livre/auteur.php";
session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>BiblioNet</title>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
	<link rel="stylesheet" href="style/bootstrap.css" media="screen">
	<link rel="stylesheet" href="style/usebootstrap.css">
	<link type='text/css' rel='stylesheet' href='style/main.css'/>
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/usebootstrap.js"></script>
	<!--<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet'> -->
</head>


<body class="background">
<!-- Le menu -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="?uc=Accueil">BiblioNet</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="?uc=Accueil">Accueil</a></li>
				<li><a href="?uc=Livre">Livre</a></li>
				<li><a href="?uc=Panier">Panier</a></li>

			</ul>
			<?php
			if(isset($_SESSION['mail'])){
				?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?uc=MonCompte">Mon Compte</a></li>
					<li><a href="?uc=Deconnexion">Déconnexion</a></li>
				</ul>
				<?php
			}else{
				?>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?uc=Connexion">Connexion</a></li>
					<li><a href="?uc=Inscription">Inscription</a></li>
				</ul>
				<?php
			}
			?>
		</div><!-- /.navbar-collapse -->
	</div>
</div>
<div class="container">
	<!-- Le corps -->
	<?php if (isset($_GET['uc']))
	{
		switch ($_GET['uc'])
		{
			case 'Accueil' : include("Vue/Accueil/vue_accueil.php"); break;
			case 'Panier' : include("Controleur/Panier/controleur_panier.php"); break;
			case 'MonCompte' : include("Controleur/Espace Compte/controleur_espacecompte.php"); break;
			case 'Connexion' : include("Controleur/Connexion/controleur_connexion.php"); break;
			case 'Inscription' :  include("Controleur/Inscription/controleur_inscription.php"); break;
			case 'Livre' :  include("Controleur/Livre/controleur_livre.php"); break;
			case 'Deconnexion' :  include("Controleur/Deconnexion.php"); break;
			case 'Commentaire' : include("Controleur/Commentaire/controleur_commentaire.php"); break;
			default : include("Vue/Accueil/vue_accueil.php"); break;
		}
	}
	else
	{
		header('Location: index.php?uc=accueil');
	}

	?>
</div>


</body>

<!--<footer id="pied_de_page">
    <p> Copyright by BiblioNet, tous droits réservés </p>
</footer>-->
</html>
