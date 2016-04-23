<?php
use BiblioNet\Models\MInscription;
use BiblioNet\Models\Main;
use BiblioNet\Classes\Utilisateur;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirInscription";

switch($action){
	case 'voirInscription':
		require_once ROOT.'Views/Inscription/vue_inscription.php';
		break;

	case 'Inscription':
		try {
			if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['adresse']) && isset($_POST['code']) && isset($_POST['ville'])) {
				$utilisateur = MInscription::getUnUser($_POST['mail']);
				if ($_POST['mail'] == $utilisateur->getAdresseMail()) {
					Main::setFlashMessage('Cette e-mail est déjà utilisée.','error');
					header("Location:?uc=Inscription");
				} elseif (strlen($_POST['nom']) > 20) {
					Main::setFlashMessage('Le nom entré est trop long','error');
					header("Location:?uc=Inscription");
				} elseif (strlen($_POST['prenom']) > 20) {
					Main::setFlashMessage('Le prénom entré est trop long','error');
					header("Location:?uc=Inscription");
				} elseif (strlen($_POST['code']) != 5) {
					Main::setFlashMessage('Le code postal entré n\'est pas au bon format (ex: 30000)','error');
					header("Location:?uc=Inscription");
				} else {
					unset($_SESSION['error']);

					$unUser = new Utilisateur(1,$_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail'], $_POST['adresse'], $_POST['code'], $_POST['ville']);
					MInscription::setAjouterUser($unUser);
					Main::setFlashMessage('Inscription réussie, vous pouvez désormais vous connecter.','valid');
					header("Location:?uc=index");
				}
			} else {
				header("Location:?uc=index");
			}
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=inscription');
		}
		break;

	default : header("Location:?uc=index");
}