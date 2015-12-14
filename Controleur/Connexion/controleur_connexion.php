<?php
require_once('Modele/Connexion/modele_connexion.php');

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirConnexion";

switch($action){
	case 'voirConnexion':
	include("Vue/Connexion/vue_connexion.php"); break;

	case 'Connexion':

	if(isset($_POST['mail']))
	{
		$utilisateur = MConnexion::getUnUser($_POST['mail']);
		if($_POST['mail'] == $utilisateur['AdresseMail'] && sha1($_POST['mdp']) == $utilisateur['Password'])
		{

			$_SESSION['user']=$utilisateur['NumUser'];
			$_SESSION['mail']=$utilisateur['AdresseMail'];
			$_SESSION['Nom']=$utilisateur['Nom'];
			$_SESSION['Prenom']=$utilisateur['Prenom'];
			$_SESSION['Adresse']=$utilisateur['Adresse'];
			$_SESSION['CodePostal']=$utilisateur['CodePostal'];
			$_SESSION['Ville']=$utilisateur['Ville'];
			header("Location:?uc=index");
		}
		else
		{
			$_SESSION['error'] = 'E-mail ou mot de passe incorrecte';
			header("Location:?uc=Connexion");
		}
	}
	else
	{
		$_SESSION['error'] = "Impossible d'accéder à cette page.";
		header("Location:?uc=index");
	}
	;break;
	default : header("Location:?uc=index");

}