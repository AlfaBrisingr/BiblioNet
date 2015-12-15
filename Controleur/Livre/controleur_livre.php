<?php
require_once('Modele/Livre/modele_livre.php');
require_once('Modele/Livre/modele_genre.php');


if (isset($_REQUEST['action']))

	$action = $_REQUEST['action'];
else
	$action = "voirTousLivre";

switch($action){
	case 'voirGenre':
	if (isset($_POST['Genre']))
			     $Genre=$_POST['Genre'];
			else
			     $Genre='0';

		//liste déroulente Genre
	$tabGenre=Mgenre::getGenrelivres() ;
	
	$TabLivreGenre=MLivre::getLesLivresGenre($Genre);
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
	if (isset($_POST['Auteur']))
			     $auteur=$_POST['Auteur'];
			else
			     $auteur='0';

	$tabAuteur=MAuteur::getLesAuteur();

	$tabLesLivreDunAuteur=MLivre::getlivreAuteur($auteur);
	include("Vue/Livre/vue_auteur.php");
	
	break;
}