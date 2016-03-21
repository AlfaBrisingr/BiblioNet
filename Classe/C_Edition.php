<?php
namespace BiblioNet\Classe;

class Edition
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
