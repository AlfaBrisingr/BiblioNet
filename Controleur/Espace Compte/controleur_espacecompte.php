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
		header("Location:?uc=MonCompte");
	}
	break;

	default: header("Location:?uc=Accueil");

}