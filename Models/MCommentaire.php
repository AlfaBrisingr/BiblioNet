<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Auteur;
use BiblioNet\Classes\Collection;
use BiblioNet\Classes\Commentaire;
use BiblioNet\Classes\Edition;
use BiblioNet\Classes\Genre;
use BiblioNet\Classes\Livre;
use BiblioNet\Classes\Utilisateur;

class MCommentaire{

	static public function ajouterCommentaire(Commentaire $commentaire){
		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("INSERT INTO Commentaire (NoUser, NoLivre, Com, DateCom) VALUES (?,?,?,?)");
		$req->execute(array($commentaire->getUser()->getNumUser(),$commentaire->getLivre()->getNumLivre(),$commentaire->getCom(),$commentaire->getDateCom()));
		$conn = null;
		return true;
	}

	static public function getLesCommentaires($num){
		$LesCommentaires = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->prepare('SELECT * FROM Commentaire
				LEFT JOIN Utilisateur ON Utilisateur.NumUser = Commentaire.NoUser
				INNER JOIN Livre ON Livre.NumLivre = Commentaire.NoLivre
				INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
				INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
				INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
				WHERE NumLivre = ?
				ORDER BY DateCom DESC');
			$reqPrepare->execute(array($num));
			$reqPrepare = $reqPrepare->fetchAll();
			foreach($reqPrepare as $UnCommentaire){
				$unGenre = new Genre($UnCommentaire['NumGenre'],$UnCommentaire['NomGenre']);
				$uneEdition = new Edition($UnCommentaire['NumEdition'],$UnCommentaire['NomEdition']);
				$unAuteur = new Auteur($UnCommentaire['NumAuteur'],['NomAuteur']);
				$unUser = new Utilisateur($UnCommentaire['NumUser'],$UnCommentaire['Nom'],$UnCommentaire['Prenom'],$UnCommentaire['Password'],$UnCommentaire['AdresseMail'],$UnCommentaire['Adresse'],$UnCommentaire['CodePostal'],$UnCommentaire['Ville']);
				$unLivre = new Livre($unGenre,$UnCommentaire['NumLivre'],$UnCommentaire['CodeISBN'],$UnCommentaire['Nom'],$unAuteur,$UnCommentaire['QuantiteStock'],$UnCommentaire['DateSortie'],$UnCommentaire['Tarif'],$UnCommentaire['Resume'],$UnCommentaire['Langue'],$UnCommentaire['Couverture'],$uneEdition);
				$unCommentaire = new Commentaire($UnCommentaire['DateCom'],$unUser,$unLivre,$UnCommentaire['Com']);
				$LesCommentaires->ajouter($unCommentaire);
			}
			$conn = null;

			return $LesCommentaires;

		}catch (\Exception $e){

		}
	}
}
