<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Utilisateur;

class MInscription{
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

	static public function setAjouterUser(Utilisateur $unUser){
		try
		{
			$mdp = sha1($unUser->getPassword());
			$conn = Main::BDDConnexionPDO();
			$reqprepare2=$conn->prepare("INSERT INTO Utilisateur (Nom, Prenom, Password, AdresseMail, Adresse, CodePostal, Ville) VALUES (?,?,?,?,?,?,?)");
			$reqprepare2->execute(array($unUser->getNom(),$unUser->getPrenom(),$mdp,$unUser->getAdresseMail(),$unUser->getAdresse(),$unUser->getCodePostal(),$unUser->getVille()));
			$conn = null;
		}
		catch (\PDOException $ex)
		{
			Main::setFlashMessage($ex->getMessage(),'error');
		}
	}
}
