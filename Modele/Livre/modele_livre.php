<?php 
//manque les fonctions qui retourne un livre recherché par un auteur, un code ISBN, une Date de Sortie, un Nom
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Livre/livre.php";

class Mlivre{

	static public function getUnLivre($NumLivre){

		$conn = BDDConnexionPDO();
		$req = $conn->prepare("SELECT * FROM Livre WHERE NumLivre = ?");
		$unLivre = new Livre();
		$req->setFetchMode(PDO::FETCH_INTO, $unLivre);
		$req->execute(array($NumLivre));
		$req->fetch(PDO::FETCH_INTO);
		$conn=null;
		return $unLivre;
	}

	static public function getLesLivres(){

		$conn = BDDConnexionPDO();
		$req = $conn->query("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre  ORDER BY Nom");
		$lesLivres = $req->fetchAll();
		return $lesLivres;
	}
	static public function getLesLivresGenre($NoGenre)
	{
		$conn = BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre WHERE NoGenre= ? "); 
		$req->execute(array($NoGenre));
		$deslivres = $req->fetchAll();
		return $deslivres;
	}	
	static public function getlivreAuteur($auteur){
		$conn = BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Livre INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre WHERE NumAuteur= ? "); 
		$req->execute(array($auteur));
		$deslivres = $req->fetchAll();
		return $deslivres;
	}	
}	
