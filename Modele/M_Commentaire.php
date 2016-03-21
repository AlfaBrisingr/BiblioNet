<?php
namespace BiblioNet\Modele;

class MCommentaire{

	static public function getLesCommentaires($NoLivre){
		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Commentaire LEFT JOIN Utilisateur ON Utilisateur.NumUser = Commentaire.NoUser WHERE NoLivre = ? "); 
		$req->execute(array($NoLivre));
		$LesComs = $req->fetchAll();
		return $LesComs;
	}

	static public function ajouterCommentaire($NoUser, $NoLivre, $Com, $DateCom){
		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("INSERT INTO Commentaire (NoUser, NoLivre, Com, DateCom) VALUES (?,?,?,?)");
		$req->execute(array($NoUser, $NoLivre, $Com, $DateCom));
		$conn = null;
		return true;
	}
}
