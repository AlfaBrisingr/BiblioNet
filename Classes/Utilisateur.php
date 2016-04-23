<?php
namespace BiblioNet\Classes;

class Utilisateur
{

	/**
	 * @var int
	 */
	private $NumUser;
	/**
	 * @var string
	 */
	private $Nom;
	/**
	 * @var string
	 */
	private $Prenom;
	/**
	 * @var string
	 */
	private $Password;
	/**
	 * @var string
	 */
	private $AdresseMail;
	/**
	 * @var string
	 */
	private $Adresse;
	/**
	 * @var int
	 */
	private $CodePostal;
	/**
	 * @var string
	 */
	private $Ville;

	/**
	 * Utilisateur constructor.
	 * @param int $NumUser
	 * @param string $Nom
	 * @param string $Prenom
	 * @param string $Password
	 * @param string $AdresseMail
	 * @param string $Adresse
	 * @param int $CodePostal
	 * @param string $Ville
	 */
	public function __construct($NumUser, $Nom, $Prenom, $Password, $AdresseMail, $Adresse, $CodePostal, $Ville)
	{
		$this->NumUser = $NumUser;
		$this->Nom = $Nom;
		$this->Prenom = $Prenom;
		$this->Password = $Password;
		$this->AdresseMail = $AdresseMail;
		$this->Adresse = $Adresse;
		$this->CodePostal = $CodePostal;
		$this->Ville = $Ville;
	}

	/**
	 * @return int
	 */
	public function getNumUser()
	{
		return $this->NumUser;
	}

	/**
	 * @param int $NumUser
	 */
	public function setNumUser($NumUser)
	{
		$this->NumUser = $NumUser;
	}

	/**
	 * @return string
	 */
	public function getNom()
	{
		return $this->Nom;
	}

	/**
	 * @param string $Nom
	 */
	public function setNom($Nom)
	{
		$this->Nom = $Nom;
	}

	/**
	 * @return string
	 */
	public function getPrenom()
	{
		return $this->Prenom;
	}

	/**
	 * @param string $Prenom
	 */
	public function setPrenom($Prenom)
	{
		$this->Prenom = $Prenom;
	}

	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}

	/**
	 * @param string $Password
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
	}

	/**
	 * @return string
	 */
	public function getAdresseMail()
	{
		return $this->AdresseMail;
	}

	/**
	 * @param string $AdresseMail
	 */
	public function setAdresseMail($AdresseMail)
	{
		$this->AdresseMail = $AdresseMail;
	}

	/**
	 * @return string
	 */
	public function getAdresse()
	{
		return $this->Adresse;
	}

	/**
	 * @param string $Adresse
	 */
	public function setAdresse($Adresse)
	{
		$this->Adresse = $Adresse;
	}

	/**
	 * @return int
	 */
	public function getCodePostal()
	{
		return $this->CodePostal;
	}

	/**
	 * @param int $CodePostal
	 */
	public function setCodePostal($CodePostal)
	{
		$this->CodePostal = $CodePostal;
	}

	/**
	 * @return string
	 */
	public function getVille()
	{
		return $this->Ville;
	}

	/**
	 * @param string $Ville
	 */
	public function setVille($Ville)
	{
		$this->Ville = $Ville;
	}




}