<?php
namespace BiblioNet\Modele;

use BiblioNet\Classe\genre;

class MEdition{


	static public function getLesEdition(){

		$conn = Main::BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Edition");
		$lesEdition = $req->fetchAll();
		return $lesEdition;
}
static public function getlivreEdition($edition){
	$conn = Main::BDDConnexionPDO();
	$req = $conn->prepare("SELECT * FROM Edition WHERE NumEdition = ?");
	$Ungenre = new genre();
	$req->setFetchMode(PDO::FETCH_INTO, $edition);
	$req->execute(array($NoGenre));
	$req->fetch(PDO::FETCH_INTO);
	$conn=null;
	return $deslivres;
}
}
