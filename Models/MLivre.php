<?php
namespace BiblioNet\Models;

use BiblioNet\Classes\Auteur;
use BiblioNet\Classes\Collection;
use BiblioNet\Classes\Edition;
use BiblioNet\Classes\Genre;
use BiblioNet\Classes\Livre;

class MLivre{


	static public function getUnLivre($num){
		try{
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->prepare('SELECT * FROM Livre
 				INNER JOIN Auteur ON Auteur.NumAuteur = Livre.NumAuteur
 				INNER JOIN Edition ON Edition.NumEdition = Livre.NoEdition
 				INNER JOIN Genre ON Genre.NumGenre = Livre.NoGenre
 				WHERE NumLivre = ?');
			$reqPrepare->execute(array($num));
			$reqPrepare = $reqPrepare->fetch();
			$unGenre = new Genre($reqPrepare['NumGenre'],$reqPrepare['NomGenre']);
			$uneEdition = new Edition($reqPrepare['NumEdition'],$reqPrepare['NomEdition']);
			$unAuteur = new Auteur($reqPrepare['NumAuteur'],$reqPrepare['NomAuteur']);
			$unLivre = new Livre(
				$unGenre,
				$reqPrepare['NumLivre'],
				$reqPrepare['CodeISBN'],
				$reqPrepare['Nom'],
				$unAuteur,
				$reqPrepare['QuantiteStock'],
				$reqPrepare['DateSortie'],
				$reqPrepare['Tarif'],
				$reqPrepare['Resume'],
				$reqPrepare['Langue'],
				$reqPrepare['Couverture'],
				$uneEdition);
			$conn = null;

			return $unLivre;

		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
	}

	static public function getLesLivres(){

		$LesLivres = new Collection();
		try {
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->query('SELECT * FROM Livre
			  INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
			  INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
			  INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
			  ORDER BY Nom');
			$reqPrepare = $reqPrepare->fetchAll();
			foreach ($reqPrepare as $unLivre){
				$genre = new Genre($unLivre['NoGenre'],$unLivre['NomGenre']);
				$auteur = new Auteur($unLivre['NumAuteur'],$unLivre['NomAuteur']);
				$edition = new Edition($unLivre['NoEdition'],$unLivre['NomEdition']);
				$livre = new Livre(
					$genre,
					$unLivre['NumLivre'],
					$unLivre['CodeISBN'],
					$unLivre['Nom'],
					$auteur,
					$unLivre['QuantiteStock'],
					$unLivre['DateSortie'],
					$unLivre['Tarif'],
					$unLivre['Resume'],
					$unLivre['Langue'],
					$unLivre['Couverture'],
					$edition);
				$LesLivres->ajouter($livre);
			}

			$conn = null;


		}catch(\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesLivres;
	}

	static public function getLesLivresGenre(Genre $unGenre){
		$LesLivres = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->prepare('SELECT * FROM Livre
			  INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
			  INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
			  INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
			  WHERE NumGenre= ?
			  ORDER BY Nom');
			$reqPrepare->execute(array($unGenre->getNumGenre()));
			$reqPrepare = $reqPrepare->fetchAll();
			foreach ($reqPrepare as $unLivre){
				$genre = new Genre($unLivre['NoGenre'],$unLivre['NomGenre']);
				$auteur = new Auteur($unLivre['NumAuteur'],$unLivre['NomAuteur']);
				$edition = new Edition($unLivre['NoEdition'],$unLivre['NomEdition']);
				$livre = new Livre(
					$genre,
					$unLivre['NumLivre'],
					$unLivre['CodeISBN'],
					$unLivre['Nom'],
					$auteur,
					$unLivre['QuantiteStock'],
					$unLivre['DateSortie'],
					$unLivre['Tarif'],
					$unLivre['Resume'],
					$unLivre['Langue'],
					$unLivre['Couverture'],
					$edition);
				$LesLivres->ajouter($livre);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}

		return $LesLivres;
	}

	static public function getLesLivresEdition(Edition $uneEdition){
		$LesLivres = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->prepare('SELECT * FROM Livre
			  INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
			  INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
			  INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
			  WHERE NumEdition= ?
			  ORDER BY Nom');
			$reqPrepare->execute(array($uneEdition->getNumEdition()));
			$reqPrepare = $reqPrepare->fetchAll();
			foreach ($reqPrepare as $unLivre){
				$genre = new Genre($unLivre['NoGenre'],$unLivre['NomGenre']);
				$auteur = new Auteur($unLivre['NumAuteur'],$unLivre['NomAuteur']);
				$edition = new Edition($unLivre['NoEdition'],$unLivre['NomEdition']);
				$livre = new Livre(
					$genre,
					$unLivre['NumLivre'],
					$unLivre['CodeISBN'],
					$unLivre['Nom'],
					$auteur,
					$unLivre['QuantiteStock'],
					$unLivre['DateSortie'],
					$unLivre['Tarif'],
					$unLivre['Resume'],
					$unLivre['Langue'],
					$unLivre['Couverture'],
					$edition);
				$LesLivres->ajouter($livre);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}

		return $LesLivres;
	}

	static public function getLesLivresAuteur(Auteur $unAuteur){
		$LesLivres = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$reqPrepare = $conn->prepare('SELECT * FROM Livre
			  INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
			  INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
			  INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
			  WHERE Livre.NumAuteur= ?
			  ORDER BY Nom');
			$reqPrepare->execute(array($unAuteur->getNumAuteur()));
			$reqPrepare = $reqPrepare->fetchAll();
			foreach ($reqPrepare as $unLivre){
				$genre = new Genre($unLivre['NoGenre'],$unLivre['NomGenre']);
				$auteur = new Auteur($unLivre['NumAuteur'],$unLivre['NomAuteur']);
				$edition = new Edition($unLivre['NoEdition'],$unLivre['NomEdition']);
				$livre = new Livre(
					$genre,
					$unLivre['NumLivre'],
					$unLivre['CodeISBN'],
					$unLivre['Nom'],
					$auteur,
					$unLivre['QuantiteStock'],
					$unLivre['DateSortie'],
					$unLivre['Tarif'],
					$unLivre['Resume'],
					$unLivre['Langue'],
					$unLivre['Couverture'],
					$edition);
				$LesLivres->ajouter($livre);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}

		return $LesLivres;
	}

	static public function getLivreRand(){
		$LesLivres = new Collection();
		try{
			$conn = Main::BDDConnexionPDO();
			$req = $conn->query("SELECT *
			  FROM Livre
			  INNER JOIN Genre ON Livre.NoGenre = Genre.NumGenre
			  INNER JOIN Auteur ON Livre.NumAuteur = Auteur.NumAuteur
			  INNER JOIN Edition ON Livre.NoEdition = Edition.NumEdition
			  ORDER BY Rand() DESC LIMIT 0,4");
			$req = $req->fetchAll();
			foreach ($req as $unLivre) {
				$genre = new Genre($unLivre['NoGenre'], $unLivre['NomGenre']);
				$auteur = new Auteur($unLivre['NumAuteur'], $unLivre['NomAuteur']);
				$edition = new Edition($unLivre['NoEdition'], $unLivre['NomEdition']);
				$livre = new Livre(
					$genre,
					$unLivre['NumLivre'],
					$unLivre['CodeISBN'],
					$unLivre['Nom'],
					$auteur,
					$unLivre['QuantiteStock'],
					$unLivre['DateSortie'],
					$unLivre['Tarif'],
					$unLivre['Resume'],
					$unLivre['Langue'],
					$unLivre['Couverture'],
					$edition);
				$LesLivres->ajouter($livre);
			}
		}catch (\Exception $e){
			Main::setFlashMessage($e->getMessage(),'error');
		}
		return $LesLivres;
	}
}
