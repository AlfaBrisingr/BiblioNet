<?php
namespace BiblioNet\Classes;

class Commentaire {

	/**
	 * @var int
	 */
	private $NumCom;
	/**
	 * @var Utilisateur
	 */
	private $User;
	/**
	 * @var Livre
	 */
	private $Livre;
	/**
	 * @var string
	 */
	private $Com;
	/**
	 * @var string
	 */
	private $DateCom;

	/**
	 * Commentaire constructor.
	 * @param int $NumCom
	 * @param string $DateCom
	 * @param Utilisateur $User
	 * @param Livre $Livre
	 * @param string $Com
	 */
	public function __construct($DateCom, Utilisateur $User, Livre $Livre, $Com)
	{
		$this->DateCom = $DateCom;
		$this->User = $User;
		$this->Livre = $Livre;
		$this->Com = $Com;
	}

	/**
	 * @return int
	 */
	public function getNumCom()
	{
		return $this->NumCom;
	}

	/**
	 * @param int $NumCom
	 */
	public function setNumCom($NumCom)
	{
		$this->NumCom = $NumCom;
	}

	/**
	 * @return Utilisateur
	 */
	public function getUser()
	{
		return $this->User;
	}

	/**
	 * @param Utilisateur $User
	 */
	public function setUser($User)
	{
		$this->User = $User;
	}

	/**
	 * @return Livre
	 */
	public function getLivre()
	{
		return $this->Livre;
	}

	/**
	 * @param Livre $Livre
	 */
	public function setLivre($Livre)
	{
		$this->Livre = $Livre;
	}

	/**
	 * @return string
	 */
	public function getCom()
	{
		return $this->Com;
	}

	/**
	 * @param string $Com
	 */
	public function setCom($Com)
	{
		$this->Com = $Com;
	}

	/**
	 * @return string
	 */
	public function getDateCom()
	{
		return $this->DateCom;
	}

	/**
	 * @param string $DateCom
	 */
	public function setDateCom($DateCom)
	{
		$this->DateCom = $DateCom;
	}



}
