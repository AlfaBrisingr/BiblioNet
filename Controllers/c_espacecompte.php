<?php
use BiblioNet\Models\Main;
use BiblioNet\Models\MCompte;

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

		}catch (Exception $e){
			Main::setFlashMessage('Une erreur est survenue lors de la modification de votre compte','error');
		}
		break;

	case 'modifPrenom':
		require_once ROOT.'Views/Espace Compte/vue_modifprenom.php';
		break;

	case 'ValiderModifPrenom' :
		if(isset($_POST['NewPrenom'])){
			$utilisateur = MCompte::getUnUser($_SESSION['mail']);
			$utilisateur->setPrenom($_POST['NewPrenom']);
			MCompte::setModifPrenom($utilisateur);
			$_SESSION['Prenom'] = $_POST['NewPrenom'];
			Main::setFlashMessage('Le prénom a été modifié','valid');
			header("Location:?uc=MonCompte");
		}
		break;

	case 'modifNom':
		require_once ROOT.'Views/Espace Compte/vue_modifnom.php';
		break;

	case 'ValiderModifNom' :
		if(isset($_POST['NewNom'])){
			$utilisateur = MCompte::getUnUser($_SESSION['mail']);
			$utilisateur->setNom($_POST['NewNom']);
			MCompte::setModifNom($utilisateur);
			$_SESSION['Nom'] = $_POST['NewNom'];
			Main::setFlashMessage('Le nom a été modifié','valid');
			header("Location:?uc=MonCompte");
		}
		break;

	case 'modifAdresse':
		require_once ROOT.'Views/Espace Compte/vue_modifadresse.php';
		break;

	case 'ValiderModifAdresse' :
		if(isset($_POST['NewAdresse'])&&isset($_POST['NewCode'])&&isset($_POST['NewVille'])){
			$utilisateur = MCompte::getUnUser($_SESSION['mail']);
			$utilisateur->setAdresse($_POST['NewAdresse']);
			$utilisateur->setCodePostal($_POST['NewCode']);
			$utilisateur->setVille($_POST['NewVille']);
			MCompte::setModifAdresse($utilisateur);
			$_SESSION['Adresse'] = $_POST['NewAdresse'];
			$_SESSION['CodePostal'] = $_POST['NewCode'];
			$_SESSION['Ville'] = $_POST['NewVille'];
			Main::setFlashMessage('L\'adresse à été modifié','valid');
			header("Location:?uc=MonCompte");
		}
		break;



	default: header("Location:?uc=Accueil");

}