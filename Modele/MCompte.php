<?php
namespace BiblioNet\Modele;

use BiblioNet\Classe\Utilisateur;

class MCompte{
	static public function getUnUser($AdresseMail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Utilisateur WHERE AdresseMail = ? "); 
		$unUser = new Utilisateur();
		$req->setFetchMode(\PDO::FETCH_INTO, $unUser);
		$req->execute(array( $AdresseMail ));
		$req->fetch(\PDO::FETCH_INTO);
		$conn = null;
		return $unUser;
	}

	static public function setModifMail($NumUser, $Mail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("UPDATE Utilisateur SET AdresseMail=? WHERE NumUser=? ");
		$req->execute(array( $Mail, $NumUser ));
		$conn = null;
		return true;

	}

	static public function setModifNom($Nom,$AdresseMail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("UPDATE Utilisateur SET Nom=? WHERE AdresseMail=? ");
		$req->execute(array( $Nom, $AdresseMail  ));
		$conn = null;
		return true;

	}

	static public function setModifPrenom($Prenom, $AdresseMail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("UPDATE Utilisateur SET Prenom=? WHERE AdresseMail=? ");
		$req->execute(array( $Prenom, $AdresseMail ));
		$conn = null;
		return true;

	}

	static public function setModifAdresse($Adresse, $CodePostal, $Ville, $AdresseMail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("UPDATE Utilisateur SET Adresse=?, CodePostal=?, Ville=? WHERE AdresseMail=? ");
		$req->execute(array( $Adresse, $CodePostal, $Ville, $AdresseMail ));
		$conn = null;
		return true;

	}
}
