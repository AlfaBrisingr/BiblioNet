<?php
require_once('Modele/Espace Compte/modele_espacecompte.php');

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirEspaceCompte";

switch($action){
	case 'voirEspaceCompte':
	include("Vue/Espace Compte/vue_espacecompte.php"); break;

	case 'modifPrenom':
	include("Vue/Espace Compte/vue_modifprenom.php"); break;

	case 'ValiderModifPrenom' : 
	if(isset($_POST['NewPrenom'])){
		$utilisateur = getUnUser($_SESSION['mail']);
		$User = array ( 'Prenom' => $_POST['NewPrenom'], 'mail' => $_SESSION['mail']);
		setModifPrenom($User['Prenom'],$User['mail']);
		$_SESSION['Prenom'] = $_POST['NewPrenom'];
		header("Location:?uc=MonCompte");
	}
	break;

	case 'modifNom':
	include("Vue/Espace Compte/vue_modifnom.php"); break;

	case 'ValiderModifNom' : 
	if(isset($_POST['NewNom'])){
		$utilisateur = getUnUser($_SESSION['mail']);
		$User = array ( 'Nom' => $_POST['NewNom'], 'mail' => $_SESSION['mail']);
		setModifNom($User['Nom'],$User['mail']);
		$_SESSION['Nom'] = $_POST['NewNom'];
		header("Location:?uc=MonCompte");
	}
	break;

	case 'modifAdresse':
	include("Vue/Espace Compte/vue_modifadresse.php"); break;

	case 'ValiderModifAdresse' : 
	if(isset($_POST['NewAdresse'])&&isset($_POST['NewCode'])&&isset($_POST['NewVille'])){
		$utilisateur = getUnUser($_SESSION['mail']);
		$User = array ( 'Adresse' => $_POST['NewAdresse'], 'CodePostal' => $_POST['NewCode'], 'Ville' => $_POST['NewVille'], 'mail' => $_SESSION['mail']);
		setModifAdresse($User['Adresse'],$User['CodePostal'],$User['Ville'],$User['mail']);
		$_SESSION['Adresse'] = $_POST['NewAdresse'];
		$_SESSION['CodePostal'] = $_POST['NewCode'];
		$_SESSION['Ville'] = $_POST['NewVille'];
		header("Location:?uc=MonCompte");
	}
	break;



	default: header("Location:?uc=Accueil");

}