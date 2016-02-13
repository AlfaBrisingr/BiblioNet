<?php
require_once "Modele/Livre/modele_edition.php";

class edition
{
     private $NumEdition;
	 private $NomEdition;

public function __construct (){

	}
	public function getNumEdition(){

		return ($this->NumEdition);
	}

	public function getNomEdition(){

		return ($this->NomEdition);
	}
public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}

}
