<?php
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Connexion/connexion.php";

static public function getUnUser($AdresseMail){

	$conn = BDDConnexionPDO();
	$req=$conn->prepare("SELECT * FROM Utilisateur WHERE AdresseMail=?"); 
	$req->execute(array($AdresseMail));
	$conn = null;
	return $req->fetch();
	
}
