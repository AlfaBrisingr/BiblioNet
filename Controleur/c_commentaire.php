<?php
use BiblioNet\Modele\MLivre;
use BiblioNet\Modele\MCommentaire;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirCommentaire";

switch($action){

	case 'voirCommentaire' : 
	$Livre = MLivre::getUnLivre($_GET['ref']);
	$TabCom = MCommentaire::getLesCommentaires($_GET['ref']);
	$_SESSION['NoLivre'] = $Livre->getNumLivre();
	include ('Vue/Commentaire/vue_commantaire.php');
	break;

	case 'ajouterCommentaire' : 
	include ('Vue/Commentaire/vue_ajouterCom.php');
	break;

	case "ValiderCommentaire" : 
	if(isset($_POST['Contenu'])){
		$Com = array(
			'NoUser' =>$_SESSION['user'],
			'NoLivre' => $_SESSION['NoLivre'],
			'Com' => $_POST['Contenu'],
			'DateCom' => date('Y-m-d'));

		$Commentaire = MCommentaire::ajouterCommentaire($Com['NoUser'],$Com['NoLivre'],$Com['Com'],$Com['DateCom']);
		include ('Vue/Accueil/vue_accueil.php');
	}
	break;
}