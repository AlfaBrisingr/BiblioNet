<?php
require_once "Modele/Livre/modele_auteur.php";

class auteur
{
	private $NumAuteur;	   
	private $NomAuteur;

	public function __construct (){

	}
	public function getNumAuteur(){

		return ($this->NumGenre);
	}

	public function getNomAuteur(){

		return ($this->NomGenre);
	}
	public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}

}