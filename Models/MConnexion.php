<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Utilisateur;
class MConnexion{
	static public function getUnUser($AdresseMail){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Utilisateur WHERE AdresseMail=?");
			$req->execute(array($AdresseMail));
			$req = $req->fetch();
			$unUser = new Utilisateur($req['NumUser'],$req['Nom'],$req['Prenom'],$req['Password'],$req['AdresseMail'],$req['Adresse'],$req['CodePostal'],$req['Ville']);
			$conn = null;

			return $unUser;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}


	}

	static public function getUnUserbyId($num){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Utilisateur WHERE NumUser=?");
			$req->execute(array($num));
			$req = $req->fetch();
			$unUser = new Utilisateur($req['NumUser'],$req['Nom'],$req['Prenom'],$req['Password'],$req['AdresseMail'],$req['Adresse'],$req['CodePostal'],$req['Ville']);
			$conn = null;

			return $unUser;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}


	}
}

