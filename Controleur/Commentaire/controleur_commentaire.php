<?php
require_once "Modele/Commentaire/modele_commentaire.php";
if (isset($_REQUEST['action']))
	$action = $_REQUEST['action'];
else
	$action = "voirCommentaire";

switch($action){

	case 'voirCommentaire' : 
	$TabCom = MCommentaire::getLesCommentaires($_GET['ref']);
	include ('Vue/Commentaire/vue_commantaire.php');
	break;

}