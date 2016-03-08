<?php
namespace BiblioNet\Classe;

class Commande {
	private $NumCommande;
	private $NoUsers;
	private $DateCommande;

	public function GetNumCommande(){
		return ($this->NumCommande);
	}

	public function GetNoUsers(){
		return ($this->NoUsers);
	}

	public function GetDateCommande(){
		return ($this->DateCommande);
	}

	public function __construct (){

	}

	public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}
}