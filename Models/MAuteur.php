<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Auteur;
use BiblioNet\Classes\Collection;

class MAuteur{

	static public function  getLesAuteurs() {
		$LesAuteurs = new Collection();
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->query("SELECT * FROM Auteur  ORDER BY NomAuteur");
			$req = $req->fetchAll();
			foreach ($req as $Auteur){
				$unAuteur = new Auteur($Auteur['NumAuteur'],$Auteur['NomAuteur']);
				$LesAuteurs->ajouter($unAuteur);
			}

		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesAuteurs;
	}

	static public function  getunAuteur($NumAuteur) {
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Auteur WHERE NumAuteur = ?");
			$req->execute(array($NumAuteur));
			$req = $req->fetch();
			$UnAuteur = new Auteur($req['NumAuteur'],$req['NomAuteur']);
			$conn=null;
			return $UnAuteur;
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}
}