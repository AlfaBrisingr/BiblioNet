<?php
use BiblioNet\Models\Main;
use BiblioNet\Models\MCompte;
use BiblioNet\Models\MConnexion;
use BiblioNet\Models\MPanier;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirEspaceCompte";

switch($action){

	case 'voirEspaceCompte' :
		require_once ROOT.'Views/Espace Compte/vue_espacecompte.php';
		break;

	case 'VoirModifEspaceCompte' :
		require_once ROOT.'Views/Espace Compte/vue_modif.php';
		break;

	case 'ModifEspaceCompte':
		try{
			$user = MCompte::getUnUser($_SESSION['mail']);
			if (empty($_POST['nom']) && empty($_POST['prenom']) && empty($_POST['ville']) && empty($_POST['cp']) && empty($_POST['adresse'])) {
				Main::setFlashMessage('Veuillez remplir au moins un champ à modifier', 'error');
			}
			if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['ville']) || isset($_POST['cp']) || isset($_POST['adresse'])) {
				if (!empty($_POST['nom'])) {
					$user->setNom($_POST['nom']);
					$_SESSION['Nom'] = $_POST['nom'];
				}
				if (!empty($_POST['prenom'])) {
					$user->setPrenom($_POST['prenom']);
					$_SESSION['Prenom'] = $_POST['prenom'];
				}
				if (!empty($_POST['ville'])) {
					$user->setVille($_POST['ville']);
					$_SESSION['Ville'] = $_POST['ville'];
				}
				if (!empty($_POST['cp']) && is_numeric($_POST['cp'])) {
					$user->setCodePostal($_POST['cp']);
					$_SESSION['CodePostal'] = $_POST['cp'];
				} else {
					Main::setFlashMessage("Le code postal doit être au format numérique", 'error');
				}
				if (!empty($_POST['adresse'])) {
					$user->setAdresse($_POST['adresse']);
					$_SESSION['Adresse'] = $_POST['adresse'];
				}
				MCompte::setUser($user);
				Main::setFlashMessage('Les informations du compte ont été mis à jour.', 'valid');
				header("Location:?uc=MonCompte");
			}else {
				Main::setFlashMessage('Veuillez remplir au moins un champ à modifier', 'error');
			}

		}catch (Exception $e){
			Main::setFlashMessage('Une erreur est survenue lors de la modification de votre compte','error');
		}
		break;

	case 'HistoriqueCommande' :
		try{

			$user = MConnexion::getUnUserbyId($_SESSION['user']);
			$tabCommandes = MPanier::getLesCommandesbyUser($user);
			if (isset($_POST['Commande'])) {
				$uneCommande = MPanier::getUneCommande($_POST['Commande']);
				$tabLivres = MPanier::getLivresbyCommande($uneCommande);
			}
			require_once  ROOT.'Views/Espace Compte/vue_historiquecommande.php';

		}catch (Exception $e) {
			Main::setFlashMessage('Une erreur est survenue lors de l\'affichage d\'une commande','error');
		}

		break;




	default: header("Location:?uc=Accueil");

}