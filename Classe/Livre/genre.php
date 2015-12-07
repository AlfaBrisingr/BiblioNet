<?php
require_once "Modele/Livre/modele_genre.php";

class genre
{
     private $NumGenre;	   
	 private $NomGenre;

public function __construct (){

	}
	public function getNumGenre(){

		return ($this->NumGenre);
	}

	public function getNomGenre(){

		return ($this->NomGenre);
	}
public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}

}