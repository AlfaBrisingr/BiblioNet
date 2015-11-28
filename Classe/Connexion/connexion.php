<?php
require_once "Modele/Connexion/modele_connexion.php";

class Utilisateur
{

	private $NumUser;
	private $Nom;
	private $Prenom;
	private $Password;
	private $AdresseMail;
	private $Adresse;
	private $CodePostal;
	private $Ville;

	public function __construct (){

	}

	public function getUser(){

		return ($this->NumUser);
	}

	public function getNom(){

		return ($this->Nom);
	}

	public function getPrenom(){

		return ($this->Prenom);
	}

	public function getPassword(){

		return ($this->Password);
	}

	public function getAdresseMail(){

		return ($this->AdresseMail);
	}

	public function getAdresse(){

		return ($this->Adresse);
	}

	public function getCodePostal(){

		return ($this->CodePostal);
	}

	public function getVille(){

		return ($this->Ville);
	}

	public function __get($property) {

		return $this->$property;
	}

	public function __set($property, $value) {

		$this->$property = $value;
	}
}