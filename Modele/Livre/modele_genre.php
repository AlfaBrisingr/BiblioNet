<?php 
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Livre/genre.php";

class Mgenre{

	static public function getUngenre($Numgenre){

		$conn = BDDConnexionPDO();
		$req = $conn->prepare("SELECT * FROM genre WHERE NoGenre = ?");
		$Ungenre = new genre();
		$req->setFetchMode(PDO::FETCH_INTO, $Numgenre);
		$req->execute(array($NoGenre));
		$req->fetch(PDO::FETCH_INTO);
		$conn=null;
		return $Ungenr;
	}
	static public function getGenrelivres(){
		$conn = BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Genre");
		$lesLivres = $req->fetchAll();
		return $lesLivres;
	}


}