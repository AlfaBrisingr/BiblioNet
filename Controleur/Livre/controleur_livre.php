<?php
require_once('Modele/Livre/modele_livre.php');
require_once('Modele/Livre/modele_genre.php');


if (isset($_REQUEST['action']))

	$action = $_REQUEST['action'];
else
	$action = "voirGenre";

switch($action){
	case 'voirGenre':
		//liste déroulente Genre
	$tabGenre=Mgenre::getGenrelivres() ;	

	include("Vue/Livre/vue_Genre.php");

	
	break;

	case 'voirTousLivre':
		// afichague de tou les livre 
	$TabLivre=MLivre::getLesLivres() ;

	include("Vue/Livre/vue_livre.php");
	break;
	case 'voirLivre':
		// Si déjà un POST de la liste déroulante
	if (isset($_POST['Genre']))
	{
		$categ=$_POST['Genre'];
	}
	else{
		$categ='1';
	}

			//Liste déroulante présentant les catégories 
	$tabGenre=Mgenre::getGenrelivres() ;
			// Rercherche des fleurs
	$TabLivre=MLivre::getLesLivres() ;
			//Appel de la vue

	include("Vue/Livre/vue_livre.php");
	break;
}