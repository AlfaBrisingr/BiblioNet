<?php 
require_once "produit.php";
require_once "collection.php";

class Panier{

	private $CollProduit;

	public function Panier(){

		$this->CollProduit = new Collection();
	}

	public function getNbProd(){

		return $this->CollProduit->taille();
	}

	public function augmenterQuantiteProduit($Num, $qte){

		if ($this->CollProduit->cleExiste($Num)){
			$this->CollProduit->getElement($Num)->augmenterQuantite($qte);
		}
	}

	public function diminuerQuantiteProduit($Num, $qte){

		if($this->CollProduit->cleExiste($Num))
		{

			$this->CollProduit->getElement($Num)->diminuerQuantite($qte);
			if($this->CollProduit->getElement($Num)->getQte()==0)
			{
				$this->CollProduit->supprimer($Num);
			}
		}
	}

	public function ajouterUnProduit($unProduit){

		if($this->CollProduit->cleExiste($unProduit->getRef()))
		{
			$this->augmenterQuantiteProduit($unProduit->getRef(),1);
		}
		else
		{
			$this->CollProduit->ajouter($unProduit, $unProduit->getRef());
		}

	}

	public function supprimerUnProduit($Num){

		$this->CollProduit->supprimer($Num);
	}

	public function videPanier(){

		$this->CollProduit->vider();

	}

	public function getProduitsPanier(){

		return $this->CollProduit->getCollection();

	}
}

?>