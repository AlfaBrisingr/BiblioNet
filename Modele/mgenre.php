<?php
namespace BiblioNet\Modele;

use BiblioNet\Classe\genre;

class Mgenre{

	static public function getUngenre($Numgenre){

		$conn = Main::BDDConnexionPDO();
		$req = $conn->prepare("SELECT * FROM genre WHERE NoGenre = ?");
		$Ungenre = new genre();
		$req->setFetchMode(PDO::FETCH_INTO, $Numgenre);
		$req->execute(array($NoGenre));
		$req->fetch(PDO::FETCH_INTO);
		$conn=null;
		return $Ungenr;
	}
	static public function getGenrelivres(){
		$conn = Main::BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Genre");
		$lesGenre = $req->fetchAll();
		return $lesGenre;
	}


}
