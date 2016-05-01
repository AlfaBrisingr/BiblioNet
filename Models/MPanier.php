<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Collection;
use BiblioNet\Classes\Commande;
use BiblioNet\Classes\Quantite;
use BiblioNet\Classes\Utilisateur;

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

	/**
	 * @param $id
	 * @return Commande
     */
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

	/**
	 * @param Utilisateur $user
	 * @return Collection
     */
	static public function getLesCommandesbyUser(Utilisateur $user){
		$LesCommandes = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Commande
			WHERE NoUsers = ?");
			$req->execute(array($user->getNumUser()));
			$req = $req->fetchAll();
			foreach ($req as $Commande){
				$user = MConnexion::getUnUserbyId($Commande['NoUsers']);
				$commande = new Commande($Commande['NumCommande'],$user,$Commande['DateCommande']);
				$LesCommandes->ajouter($commande);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesCommandes;
	}

	/**
	 * @param Commande $commande
	 * @return Collection
     */
	static public function getLivresbyCommande(Commande $commande){
		$LesLivres = new Collection;
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Quantite
			  INNER JOIN Commande ON Quantite.NoCommande = Commande.NumCommande
			  WHERE NoCommande = ?");
			$req->execute(array($commande->getNumCommande()));
			$req = $req->fetchAll();
			foreach ($req as $unLivre){
				$livre = MLivre::getUnLivre($unLivre['NoLivres']);
				$commande = MPanier::getUneCommande($unLivre['NoCommande']);
				$quantite = new Quantite($livre,$commande,$unLivre['Quantite']);
				$LesLivres->ajouter($quantite);
			}
			return $LesLivres;
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}

	}
}