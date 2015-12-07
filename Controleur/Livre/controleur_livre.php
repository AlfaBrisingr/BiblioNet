<?php
require_once('Modele/Livre/modele_livre.php');

if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirLivre";

switch($action){
	case 'voirLivre':
		$TabLivre=MLivre::getLesLivres() ;
		include("Vue/Livre/vue_livre.php");

	 break;
}