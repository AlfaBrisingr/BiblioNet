<?php
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Commentaire/commantaire.php";

class MCommentaire{

	static public function getLesCommentaires($NoLivre){
		$conn = BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Commentaire LEFT JOIN Utilisateur ON Utilisateur.NumUser = Commentaire.NoUser WHERE NoLivre = ? "); 
		$req->execute(array($NoLivre));
		$LesComs = $req->fetchAll();
		return $LesComs;
	}
}


