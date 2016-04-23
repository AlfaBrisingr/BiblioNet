<?php
namespace BiblioNet\Classes;

class Genre
{
	/**
	 * @var int
	 */
     private $NumGenre;
	/**
	 * @var string
	 */
	 private $NomGenre;

	/**
	 * Genre constructor.
	 * @param int $NumGenre
	 * @param string $NomGenre
	 */
	public function __construct($NumGenre, $NomGenre)
	{
		$this->NumGenre = $NumGenre;
		$this->NomGenre = $NomGenre;
	}

	/**
	 * @return string
	 */
	public function getNomGenre()
	{
		return $this->NomGenre;
	}

	/**
	 * @param string $NomGenre
	 */
	public function setNomGenre($NomGenre)
	{
		$this->NomGenre = $NomGenre;
	}

	/**
	 * @return int
	 */
	public function getNumGenre()
	{
		return utf8_encode($this->NumGenre);
	}

	/**
	 * @param int $NumGenre
	 */
	public function setNumGenre($NumGenre)
	{
		$this->NumGenre = $NumGenre;
	}



}
