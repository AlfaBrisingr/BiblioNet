<?php
namespace BiblioNet\Modele;

use BiblioNet\Classe\Livre;

class Mlivre{

	static public function getUnLivre($NumLivre){

		$conn = Main::BDDConnexionPDO();
		$req = $conn->prepare("SELECT * FROM Livre WHERE NumLivre = ?");
		$unLivre = new Livre();
		$req->setFetchMode(\PDO::FETCH_INTO, $unLivre);
		$req->execute(array($NumLivre));
		$req->fetch(\PDO::FETCH_INTO);
		$conn=null;
		return $unLivre;
	}

	static public function getLesLivres(){

		$conn = Main::BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre  ORDER BY Nom");
		$lesLivres = $req->fetchAll();
		return $lesLivres;
	}
	static public function getLesLivresGenre($NoGenre)
	{
		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre WHERE NoGenre= ? ");
		$req->execute(array($NoGenre));
		$deslivres = $req->fetchAll();
		return $deslivres;
	}
	static public function getlivreAuteur($auteur){
		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre WHERE NumAuteur= ? ");
		$req->execute(array($auteur));
		$deslivres = $req->fetchAll();
		return $deslivres;
	}
	static public function getlivreEdition($edition){
		$conn = Main::BDDConnexionPDO();
		
		$req=$conn->prepare("SELECT * FROM Livre
													INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
													INNER JOIN Edition on Livre.NoEdition =Edition.NumEdition
													 WHERE NumEdition =?");
	  $req->execute(array($edition));
		$deslivres = $req->fetchAll();
		return $deslivres;
	}
}
