<?php
use BiblioNet\Models\MCommentaire;
use BiblioNet\Models\MLivre;
use BiblioNet\Models\MGenre;
use BiblioNet\Models\MEdition;
use BiblioNet\Models\MAuteur;
use BiblioNet\Models\Main;

if (isset($_REQUEST['action']))

	$action = $_REQUEST['action'];
else
	$action = "voirTousLivre";

switch($action){
	case 'voirGenre':
		try {
			if (isset($_POST['Genre']))
				$Genre = $_POST['Genre'];
			else
				$Genre = '0';

			//liste déroulante Genre
			$tabGenre = Mgenre::getLesGenres();
			$unGenre = MGenre::getUngenre($Genre);
			$TabLivreGenre = MLivre::getLesLivresGenre($unGenre);
			require_once ROOT.'Views/Livre/vue_Genre.php';
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=livre');
		}

		break;

	case 'voirTousLivre':
		try {
			// affichage de tous les livres
			$TabLivre = MLivre::getLesLivres();
			require_once ROOT.'Views/Livre/vue_livre.php';
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=livre');
		}

		break;

	case 'voirEdition':
		try {
			if (isset($_POST['Edition']))

				$edition = $_POST['Edition'];
			else
				$edition = '0';

			$tabEdition = MEdition::getLesEditions();
			$uneEdition = MEdition::getlivreEdition($edition);
			$tabLesLivreDuneEdition = MLivre::getLesLivresEdition($uneEdition);
			require_once ROOT.'Views/Livre/vue_edition.php';
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=livre');
		}
		break;

	case 'voirauteur':
		try {
			if (isset($_POST['Auteur']))
				$auteur = $_POST['Auteur'];
			else
				$auteur = '0';

			$tabAuteur = MAuteur::getLesAuteurs();
			$unAuteur = MAuteur::getunAuteur($auteur);
			$tabLesLivreDunAuteur = MLivre::getLesLivresAuteur($unAuteur);
			require_once ROOT.'Views/Livre/vue_auteur.php';
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=livre');
		}
		break;

	case 'voirDetails':
		try{
			$Livre = MLivre::getUnLivre($_GET['livre']);
			$TabCom = MCommentaire::getLesCommentaires($_GET['livre']);
			$_SESSION['NoLivre'] = $Livre->getNumLivre();
			require_once ROOT.'Views/Livre/vue_details.php';
		}catch (Exception $e){
			Main::setFlashMessage($e->getMessage(), 'error');
			header('Location:?uc=livre');
		}
}
