<?php 
require_once "Modele/Livre/modele_livre.php";

class Produit {

	private $ref;
	private $lib;
	private $qte;
	private $prix;

	public function Produit ($Num){

		$unLivre = Mlivre::getUnLivre($Num);
		$this->ref = $Num;
		$this->lib = $unLivre->getNom();
		$this->qte = 1;
		$this->prix = $unLivre->getTarif();
	}

	public function augmenterQuantite($quantite){

		$this->qte = $this->qte + $quantite;
	}

	public function diminuerQuantite($quantite){

		$this->qte = $this->qte - $quantite;
		if ($this->qte <0)
			$this->qte = 0;
	}

	public function getLib(){
		return ($this->lib);
	}

	public function getRef(){
		return ($this->ref);
	}

	public function getQte(){
		return ($this->qte);
	}

	public function getPrix(){
		return ($this->prix);
	}
}

?>