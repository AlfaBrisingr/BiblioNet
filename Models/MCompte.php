<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Utilisateur;

class MCompte{
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

	static public function setUser(Utilisateur $user){
		try{
			$conn= Main::BDDConnexionPDO();
			$req= $conn->prepare("UPDATE Utilisateur SET Nom = ?, Prenom = ?, CodePostal = ?, Ville = ?, Adresse = ? WHERE AdresseMail = ? ");
			$req->execute(array($user->getNom(),$user->getPrenom(),$user->getCodePostal(),$user->getVille(),$user->getAdresse(),$user->getAdresseMail()));
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}

	static public function setModifMail(Utilisateur $user){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("UPDATE Utilisateur SET AdresseMail=? WHERE NumUser=? ");
			$req->execute(array($user->getAdresse(),$user->getNumUser()));
			$conn = null;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}

	}

	static public function setModifNom(Utilisateur $user){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("UPDATE Utilisateur SET Nom=? WHERE AdresseMail=? ");
			$req->execute(array($user->getNom(),$user->getAdresseMail()));
			$conn = null;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}

	}

	static public function setModifPrenom(Utilisateur $user){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("UPDATE Utilisateur SET Prenom=? WHERE AdresseMail=? ");
			$req->execute(array($user->getPrenom(),$user->getAdresseMail()));
			$conn = null;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}

	}

	static public function setModifAdresse(Utilisateur $user){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("UPDATE Utilisateur SET Adresse=?, CodePostal=?, Ville=? WHERE AdresseMail=? ");
			$req->execute(array($user->getAdresse(),$user->getCodePostal(),$user->getVille(),$user->getAdresseMail()));
			$conn = null;
		}catch (\Exception $ex){
			Main::setFlashMessage($ex->getMessage(),'error');
		}

	}
}
