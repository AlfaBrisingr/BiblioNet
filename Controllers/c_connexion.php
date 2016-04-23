<?php
use BiblioNet\Models\MConnexion;
use BiblioNet\Models\Main;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirConnexion";

switch($action){
	case 'voirConnexion':
		require_once ROOT.'Views/Connexion/vue_connexion.php';
		break;

	case 'Connexion':
		try {

			if (isset($_POST['mail'])) {
				$utilisateur = MConnexion::getUnUser($_POST['mail']);
				if ($_POST['mail'] == $utilisateur->getAdresseMail() && sha1($_POST['mdp']) == $utilisateur->getPassword()) {

					$_SESSION['user'] = $utilisateur->getNumUser();
					$_SESSION['mail'] = $utilisateur->getAdresseMail();
					$_SESSION['Nom'] = $utilisateur->getNom();
					$_SESSION['Prenom'] = $utilisateur->getPrenom();
					$_SESSION['Adresse'] = $utilisateur->getAdresse();
					$_SESSION['CodePostal'] = $utilisateur->getCodePostal();
					$_SESSION['Ville'] = $utilisateur->getVille();
					Main::setFlashMessage('Connexion avec succès','valid');
					header("Location:?uc=index");
				} else {
					Main::setFlashMessage('E-mail ou mot de passe incorrecte','error');
					header("Location:?uc=Connexion");
				}
			} else {
				Main::setFlashMessage("Impossible d'accéder à cette page.",'error');
				header("Location:?uc=index");
			}
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=connexion');
		}
		;break;
	default : header("Location:?uc=index");

}