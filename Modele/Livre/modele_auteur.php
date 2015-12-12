<?php 
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Livre/auteur.php";
class MAuteur{

	static public function  getLesAuteur() {

		$conn = BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Auteur  ORDER BY Auteur");
		$lesAuter = $req->fetchAll();
		return $lesAuter;
	}


}	