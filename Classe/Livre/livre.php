<?php 
require_once "Modele/Livre/modele_livre.php";

class Livre {

	private $NumLivre;
	private $CodeISBN;
	private $Nom;
	private $NumAuteur;
	private $QuantiteStock;
	private $DateSortie;
	private $Tarif;
	private $Resume;
	private $Langue;
	private $Couverture;
	private $NoEdition;
	private $NoGenre;

	public function __construct (){

	}

	public function getNumLivre(){

		return ($this->NumLivre);
	}

	public function getCode(){

		return ($this->CodeISBN);
	}

	public function getNom(){

		return ($this->Nom);
	}

	public function getNumAuteur(){

		return ($this->NumAuteur);
	}

	public function getQuantite(){

		return ($this->QuantiteStock);
	}

	public function getDateSortie(){

		return ($this->DateSortie);
	}

	public function getTarif(){

		return ($this->Tarif);
	}

	public function getResume(){

		return ($this->Resume);
	}

	public function getLangue(){

		return ($this->Langue);
	}

	public function getCouverture(){

		return ($this->Couverture);
	}

	public function getNoEdition(){

		return ($this->NoEdition);
	}

	public function getNoGenre(){

		return ($this->NoGenre);
	}


	public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}

}