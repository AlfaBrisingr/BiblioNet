<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Collection;
use BiblioNet\Classes\Edition;

class MEdition{


	static public function getLesEditions(){
		$LesEdition = new Collection();
		try {
			$conn = Main::BDDConnexionPDO();
			$req = $conn->query("SELECT * FROM Edition");
			$req = $req->fetchAll();
			foreach ($req as $Edition){
				$unEdition = new Edition($Edition['NumEdition'],$Edition['NomEdition']);
				$LesEdition->ajouter($unEdition);
			}

		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesEdition;
	}
	static public function getlivreEdition($edition){
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->prepare("SELECT * FROM Edition WHERE NumEdition = ?");
			$req->execute(array($edition));
			$req = $req->fetch();
			$UneEdition = new Edition($req['NumEdition'],$req['NomEdition']);
			$conn=null;
			return $UneEdition;
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}
}
