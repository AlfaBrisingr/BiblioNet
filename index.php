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
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" media="screen" type="text/css" title="Exemple" href="style/style.css" />
</head>

<body> 

	<body>   

		<!-- L'en-tête -->
		<div id="en_tete">

		</div>

		<!-- Le menu -->
		<div >        
			<?php include("Vue/gabarit.php"); ?> 
		</div> 

		<!-- Le corps -->
		<div class="corps">
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
