<?php
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Inscription/inscription.php";

class MInscription{
	static public function getUnUser($AdresseMail){

		$conn = BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Utilisateur WHERE AdresseMail=?"); 
		$unUser = new Utilisateur();
		$req->setFetchMode(PDO::FETCH_INTO, $unUser);
		$req->execute(array($_POST['mail']));
		$req->fetch(PDO::FETCH_INTO);
		$conn = null;
		return true;

	}

	static public function setAjouterUser($nom,$prenom,$mdp,$mail,$adresse,$code,$ville){
		try
		{
			$mdp = sha1($mdp);
			$conn = BDDConnexionPDO();
			$reqprepare2=$conn->prepare("INSERT INTO Utilisateur (Nom, Prenom, Password, AdresseMail, Adresse, CodePostal, Ville) VALUES (?,?,?,?,?,?,?)");
			$reqprepare2->execute(array($nom,$prenom,$mdp,$mail,$adresse,$code,$ville));
			$conn = null;
			return true;
		}
		catch (PDOException $ex)
		{
			echo "Erreur : (User already exists), merci de contacter un administrateur.";
		}
	}
}
