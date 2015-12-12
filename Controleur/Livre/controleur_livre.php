<?php
require_once('Modele/Livre/modele_livre.php');
require_once('Modele/Livre/modele_genre.php');


if (isset($_REQUEST['action']))

	$action = $_REQUEST['action'];
else
	$action = "voirTousLivre";

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

	case 'voiredition':

	$TabLivre=MLivre::getLesLivres() ;

	include("Vue/Livre/vue_edition.php");
	break;

	case 'voirauteur':

	include("Vue/Livre/vue_auteur.php");
	var_dump($tabAuteur=MAuteur::getLesAuteur());
	break;
}