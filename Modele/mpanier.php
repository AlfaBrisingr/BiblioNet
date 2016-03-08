<?php
namespace BiblioNet\Modele;

class MPanier{

	static public function AjouterCommande($NoUsers, $DateCommande){
		$conn = Main::BDDConnexionPDO();
		$req = $conn->prepare("INSERT INTO Commande(NoUsers, DateCommande) VALUES (?,?)");
		$req->execute(array($NoUsers, $DateCommande));
		$conn = null;
		return true;
	}

	static public function AjouterCommandeProduit($NoLivre, $NoCommande, $Quantite){
		$conn = Main::BDDConnexionPDO();
		$req = $conn->prepare("INSERT INTO Quantite(NoLivre, NoCommande, Quantite) VALUES (?,?,?)");
		$req->execute(array($NoLivre, $NoCommande, $Quantite));
		$conn = null;
		return true;
	}
}