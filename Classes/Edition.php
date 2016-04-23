<?php
namespace BiblioNet\Classes;

class Edition
{
	/**
	 * @var int
	 */
     private $NumEdition;
	/**
	 * @var string
	 */
	 private $NomEdition;

	/**
	 * Edition constructor.
	 * @param int $NumEdition
	 * @param string $NomEdition
	 */
	public function __construct($NumEdition, $NomEdition)
	{
		$this->NumEdition = $NumEdition;
		$this->NomEdition = $NomEdition;
	}

	/**
	 * @return int
	 */
	public function getNumEdition()
	{
		return $this->NumEdition;
	}

	/**
	 * @param int $NumEdition
	 */
	public function setNumEdition($NumEdition)
	{
		$this->NumEdition = $NumEdition;
	}

	/**
	 * @return string
	 */
	public function getNomEdition()
	{
		return utf8_encode($this->NomEdition);
	}

	/**
	 * @param string $NomEdition
	 */
	public function setNomEdition($NomEdition)
	{
		$this->NomEdition = $NomEdition;
	}




}
