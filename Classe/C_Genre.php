<?php
namespace BiblioNet\Classe;

class Genre
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
