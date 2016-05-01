<?php
use BiblioNet\Models\MLivre;
use BiblioNet\Models\MCommentaire;
use BiblioNet\Classes\Commentaire;
use BiblioNet\Models\MConnexion;
use BiblioNet\Models\Main;

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirCommentaire";

switch($action){

	case "ValiderCommentaire" :
		try {
			if (isset($_POST['Contenu'])) {
				$unUser = MConnexion::getUnUserbyId($_SESSION['user']);
				$unLivre = MLivre::getUnLivre($_SESSION['NoLivre']);
				$Com = new Commentaire(date('Y-m-d H:i:s'), $unUser, $unLivre, $_POST['Contenu']);
				MCommentaire::ajouterCommentaire($Com);
				Main::setFlashMessage('Votre Commentaire a été ajouté.','valid');
				header('Location:?uc=Livre&action=voirDetails&livre='.$unLivre->getNumLivre());
			}
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=Accueil');
		}
	break;
}