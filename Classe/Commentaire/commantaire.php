<?php 
require_once "Modele/Commentaire/modele_commentaire.php";

class Commentaire {

	private $NumCom;
	private $NoUser;
	private $NoLivre;
	private $Com;
	private $DateCom;

	public function __construct (){

	}

	public function getNumCom(){

		return ($this->NumCom);
	}

	public function getUser(){

		return ($this->NoUser);
	}

	public function getLivre(){

		return ($this->NoLivre);
	}

	public function getCom(){

		return ($this->Com);
	}

	public function getDateCom(){

		return ($this->DateCom);
	}

	public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}
}
