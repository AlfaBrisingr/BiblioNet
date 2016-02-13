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
static public function getlivreEdition($edition){
	$conn = BDDConnexionPDO();
	$req = $conn->prepare("SELECT * FROM Edition WHERE NumEdition = ?");
	$Ungenre = new genre();
	$req->setFetchMode(PDO::FETCH_INTO, $edition);
	$req->execute(array($NoGenre));
	$req->fetch(PDO::FETCH_INTO);
	$conn=null;
	return $deslivres;
}
}
