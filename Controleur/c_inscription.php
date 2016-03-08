<?php
use BiblioNet\Modele\MInscription;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirInscription";

switch($action){
	case 'voirInscription':
	include("Vue/Inscription/vue_inscription.php"); break;

	case 'Inscription':
	if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['adresse']) && isset($_POST['code']) && isset($_POST['ville']))
	{
		$_SESSION['error'] = "";
		$utilisateur = MInscription::getUnUser($_POST['mail']);
		if($_POST['mail'] == $utilisateur['AdresseMail'])
		{
			$_SESSION['error'] .= 'Cette e-mail est déjà utilisée.';
			header("Location:?uc=Inscription");
		}
		elseif(strlen($_POST['nom']) > 20)
		{
			$_SESSION['error'] .= 'Le nom entré est trop long';
			header("Location:?uc=Inscription");
		}
		elseif(strlen($_POST['prenom']) > 20)
		{
			$_SESSION['error'] .= 'Le prénom entré est trop long';
			header("Location:?uc=Inscription");
		}
		elseif(strlen($_POST['code']) != 5)
		{
			$_SESSION['error'] .= "Le code postal entré n'est pas au bon format (ex: 30000)";
			header("Location:?uc=Inscription");
		}

		else
		{
			unset($_SESSION['error']);
			$User = array(
				'nom' => $_POST['nom'],
				'prenom' => $_POST['prenom'],
				'mdp' => $_POST['mdp'],
				'mail' => $_POST['mail'],
				'adresse' => $_POST['adresse'],
				'code' => $_POST['code'],
				'ville' => $_POST['ville']);


			MInscription::setAjouterUser($User['nom'],$User['prenom'],$User['mdp'],$User['mail'],$User['adresse'],$User['code'],$User['ville']);
			$_SESSION['valid'] = "Inscription réussie, vous pouvez désormais vous connecter.";
			header("Location:?uc=index");
		}
	}
	else
	{
		header("Location:?uc=index");
	}
	break;

	default : header("Location:?uc=index");
}