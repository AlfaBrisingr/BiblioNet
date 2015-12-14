<?php
require_once "Modele/ConnexionBDD.php";
require_once "Classe/Panier/produit.php";
require_once "Classe/Panier/panier.php";

class MPanier{

	static public function AjouterCommande($NoUsers, $DateCommande){
		$conn = BDDConnexionPDO();
		$req = $conn->prepare("INSERT INTO Commande(NoUsers, DateCommande) VALUES (?,?)");
		$req->execute(array($NoUsers, $DateCommande));
		$conn = null;
		return true;
	}

	static public function AjouterCommandeProduit($NoLivre, $NoCommande, $Quantite){
		$conn = BDDConnexionPDO();
		$req = $conn->prepare("INSERT INTO Quantite(NoLivre, NoCommande, Quantite) VALUES (?,?,?)");
		$req->execute(array($NoLivre, $NoCommande, $Quantite));
		$conn = null;
		return true;
	}
}