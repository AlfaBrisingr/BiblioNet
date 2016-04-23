<?php
namespace BiblioNet\Classes;

class Commande {
	/**
	 * @var int
	 */
	private $NumCommande;
	/**
	 * @var Utilisateur
	 */
	private $NoUsers;
	/**
	 * @var string
	 */
	private $DateCommande;

	/**
	 * Commande constructor.
	 * @param int $NumCommande
	 * @param Utilisateur $NoUsers
	 * @param string $DateCommande
	 */
	public function __construct($NumCommande, Utilisateur $NoUsers, $DateCommande)
	{
		$this->NumCommande = $NumCommande;
		$this->NoUsers = $NoUsers;
		$this->DateCommande = $DateCommande;
	}

	/**
	 * @return int
	 */
	public function getNumCommande()
	{
		return $this->NumCommande;
	}

	/**
	 * @param int $NumCommande
	 */
	public function setNumCommande($NumCommande)
	{
		$this->NumCommande = $NumCommande;
	}

	/**
	 * @return Utilisateur
	 */
	public function getNoUsers()
	{
		return $this->NoUsers;
	}

	/**
	 * @param Utilisateur $NoUsers
	 */
	public function setNoUsers($NoUsers)
	{
		$this->NoUsers = $NoUsers;
	}

	/**
	 * @return string
	 */
	public function getDateCommande()
	{
		return $this->DateCommande;
	}

	/**
	 * @param string $DateCommande
	 */
	public function setDateCommande($DateCommande)
	{
		$this->DateCommande = $DateCommande;
	}



}