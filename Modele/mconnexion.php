<?php
namespace BiblioNet\Modele;

class MConnexion {
	static public function getUnUser($AdresseMail){

		$conn = Main::BDDConnexionPDO();
		$req=$conn->prepare("SELECT * FROM Utilisateur WHERE AdresseMail=?"); 
		$req->execute(array($AdresseMail));
		$conn = null;
		return $req->fetch();
	}
}
