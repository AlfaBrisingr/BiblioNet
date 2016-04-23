<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Commande;
use BiblioNet\Classes\Quantite;

class MPanier{

	static public function AjouterCommande(Commande $commande){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("INSERT INTO Commande(NoUsers, DateCommande) VALUES (?,?)");
			$req->execute(array($commande->getNoUsers()->getNumUser(), $commande->getDateCommande()));
			$id = $conn->lastInsertId();
			return $id;
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}

	static public function AjouterCommandeProduit(Quantite $quantite){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("INSERT INTO Quantite(NoLivres, NoCommande, Quantite) VALUES (?,?,?)");
			$req->execute(array($quantite->getLivre()->getNumLivre(),$quantite->getCommande()->getNumCommande(),$quantite->getQuantite()));

			$reqPrepare = $conn->prepare("UPDATE Livre SET QuantiteStock = ? WHERE NumLivre = ? ");
			$reqPrepare->execute(array($quantite->getLivre()->getQuantiteStock() - $quantite->getQuantite(),$quantite->getLivre()->getNumLivre()));
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}

	static public function getUneCommande($id){
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Commande WHERE NumCommande = ?");
			$req->execute(array($id));
			$req = $req->fetch();
			$user = MConnexion::getUnUserbyId($req['NoUsers']);
			$commande = new Commande($req['NumCommande'],$user,$req['DateCommande']);
			return $commande;

		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}
}