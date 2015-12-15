<?php
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Livre/edition.php";

class Medition{


	static public function getLesEdition(){

		$conn = BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Edition");
		$lesEdition = $req->fetchAll();
		return $lesEdition;



}
}