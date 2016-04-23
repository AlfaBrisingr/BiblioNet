<?php
namespace BiblioNet\Classes;

class Auteur
{
	/**
	 * @var int
	 */
	private $NumAuteur;
	/**
	 * @var string
	 */
	private $NomAuteur;

	public function __construct ($numero,$nom){
		$this->NumAuteur = $numero;
		$this->NomAuteur = $nom;
	}

	/**
	 * @return int
	 */
	public function getNumAuteur()
	{
		return $this->NumAuteur;
	}

	/**
	 * @param int $NumAuteur
	 */
	public function setNumAuteur($NumAuteur)
	{
		$this->NumAuteur = $NumAuteur;
	}

	/**
	 * @return string
	 */
	public function getNomAuteur()
	{
		return utf8_encode($this->NomAuteur);
	}

	/**
	 * @param string $NomAuteur
	 */
	public function setNomAuteur($NomAuteur)
	{
		$this->NomAuteur = $NomAuteur;
	}



}
