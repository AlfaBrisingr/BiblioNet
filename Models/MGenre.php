<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Collection;
use BiblioNet\Classes\Genre;

class MGenre{

	static public function getUngenre($Numgenre){
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Genre WHERE NumGenre = ?");
			$req->execute(array($Numgenre));
			$req = $req->fetch();
			$UnGenre = new Genre($req['NumGenre'], $req['NomGenre']);
			$conn = null;
			return $UnGenre;
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}
	static public function getLesGenres(){
		$LesGenres = new Collection();
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->query("SELECT * FROM Genre");
			$req = $req->fetchAll();
			foreach ($req as $Genre){
				$unGenre = new Genre($Genre['NumGenre'],$Genre['NomGenre']);
				$LesGenres->ajouter($unGenre);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesGenres;
	}


}
