<?php 
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Livre/auteur.php";
class MAuteur{

	static public function  getLesAuteur() {

		$conn = BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Auteur  ORDER BY NomAuteur");
		$lesAuter = $req->fetchAll();
		return $lesAuter;
	}

static public function  getunAuteur($NumAuter) {
$conn = BDDConnexionPDO();
		$req = $conn->prepare("SELECT * FROM Livre WHERE NumAuteur = ?");
		$Ungenre = new genre();
		$req->setFetchMode(PDO::FETCH_INTO, $NumAuteur);
		$req->execute(array($NumAuteur));
		$req->fetch(PDO::FETCH_INTO);
		$conn=null;
		return $leslivredelauteur; 
}
}