<?php
namespace BiblioNet\Classes;

class Livre {

	/**
	 * @var int
	 */
	private $NumLivre;
	/**
	 * @var int
	 */
	private $CodeISBN;
	/**
	 * @var string
	 */
	private $Nom;
	/**
	 * @var Auteur
	 */
	private $Auteur;
	/**
	 * @var int
	 */
	private $QuantiteStock;
	/**
	 * @var string
	 */
	private $DateSortie;
	/**
	 * @var string
	 */
	private $Tarif;
	/**
	 * @var string
	 */
	private $Resume;
	/**
	 * @var string
	 */
	private $Langue;
	/**
	 * @var string
	 */
	private $Couverture;
	/**
	 * @var Edition
	 */
	private $Edition;
	/**
	 * @var Genre
	 */
	private $Genre;
	/**
	 * @var int
	 */
	private $qte;

	/**
	 * Livre constructor.
	 * @param Genre $Genre
	 * @param int $NumLivre
	 * @param int $CodeISBN
	 * @param string $Nom
	 * @param Auteur $Auteur
	 * @param int $QuantiteStock
	 * @param string $DateSortie
	 * @param string $Tarif
	 * @param string $Resume
	 * @param string $Langue
	 * @param string $Couverture
	 * @param Edition $Edition
	 */
	public function __construct(Genre $Genre, $NumLivre, $CodeISBN, $Nom, Auteur $Auteur, $QuantiteStock, $DateSortie, $Tarif, $Resume, $Langue, $Couverture, Edition $Edition)
	{
		$this->Genre = $Genre;
		$this->NumLivre = $NumLivre;
		$this->CodeISBN = $CodeISBN;
		$this->Nom = $Nom;
		$this->Auteur = $Auteur;
		$this->QuantiteStock = $QuantiteStock;
		$this->DateSortie = $DateSortie;
		$this->Tarif = $Tarif;
		$this->Resume = $Resume;
		$this->Langue = $Langue;
		$this->Couverture = $Couverture;
		$this->Edition = $Edition;
	}

	public function getLivres(){

		$ref = $this->NumLivre;
		$lib = $this->Nom;
		$prix = $this->Tarif;
		$qteStock = $this->QuantiteStock;
		$qte = $this->qte;
		$tab = [
			'numLivre' => $ref,
			'lib' => $lib,
			'prix' => $prix,
			'qteStock' => $qteStock,
			'qte' => $qte
		];
		return $tab;
	}

	public function augmenterQuantite($quantite){

		$this->qte = $this->qte + $quantite;
	}

	public function diminuerQuantite($quantite){

		$this->qte = $this->qte - $quantite;
		if ($this->qte <0)
			$this->qte = 0;
	}


	/**
	 * @return int
	 */
	public function getNumLivre()
	{
		return $this->NumLivre;
	}

	/**
	 * @param int $NumLivre
	 */
	public function setNumLivre($NumLivre)
	{
		$this->NumLivre = $NumLivre;
	}

	/**
	 * @return int
	 */
	public function getCodeISBN()
	{
		return $this->CodeISBN;
	}

	/**
	 * @param int $CodeISBN
	 */
	public function setCodeISBN($CodeISBN)
	{
		$this->CodeISBN = $CodeISBN;
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
	 * @return Auteur
	 */
	public function getAuteur()
	{
		return $this->Auteur;
	}

	/**
	 * @param Auteur $Auteur
	 */
	public function setAuteur($Auteur)
	{
		$this->Auteur = $Auteur;
	}

	/**
	 * @return int
	 */
	public function getQuantiteStock()
	{
		return $this->QuantiteStock;
	}

	/**
	 * @param int $QuantiteStock
	 */
	public function setQuantiteStock($QuantiteStock)
	{
		$this->QuantiteStock = $QuantiteStock;
	}

	/**
	 * @return string
	 */
	public function getDateSortie()
	{
		return $this->DateSortie;
	}

	/**
	 * @param string $DateSortie
	 */
	public function setDateSortie($DateSortie)
	{
		$this->DateSortie = $DateSortie;
	}

	/**
	 * @return string
	 */
	public function getTarif()
	{
		return $this->Tarif;
	}

	/**
	 * @param string $Tarif
	 */
	public function setTarif($Tarif)
	{
		$this->Tarif = $Tarif;
	}

	/**
	 * @return string
	 */
	public function getResume()
	{
		return $this->Resume;
	}

	/**
	 * @param string $Resume
	 */
	public function setResume($Resume)
	{
		$this->Resume = $Resume;
	}

	/**
	 * @return string
	 */
	public function getLangue()
	{
		return $this->Langue;
	}

	/**
	 * @param string $Langue
	 */
	public function setLangue($Langue)
	{
		$this->Langue = $Langue;
	}

	/**
	 * @return string
	 */
	public function getCouverture()
	{
		return $this->Couverture;
	}

	/**
	 * @param string $Couverture
	 */
	public function setCouverture($Couverture)
	{
		$this->Couverture = $Couverture;
	}

	/**
	 * @return Edition
	 */
	public function getEdition()
	{
		return $this->Edition;
	}

	/**
	 * @param Edition $Edition
	 */
	public function setEdition($Edition)
	{
		$this->Edition = $Edition;
	}

	/**
	 * @return Genre
	 */
	public function getGenre()
	{
		return $this->Genre;
	}

	/**
	 * @param Genre $Genre
	 */
	public function setGenre($Genre)
	{
		$this->Genre = $Genre;
	}

	/**
	 * @return int
	 */
	public function getQte()
	{
		return $this->qte;
	}

	/**
	 * @param int $qte
	 */
	public function setQte($qte)
	{
		$this->qte = $qte;
	}

	/**
	 * @return int
	 */
	public function getTaille($nom){
		return strlen($nom);
	}



}
