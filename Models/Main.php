<?php
namespace BiblioNet\Models;

class Main
{
// Connexion à la base de données
	public static function BDDConnexionPDO()
	{
		$PARAM_hote = 'btsinfo-rousseau53.fr:33017';
		$PARAM_nom_bd = '2014-biblionet_base';
		$PARAM_utilisateur = '2014-biblionet';
		$PARAM_mot_passe = '123456';
		try {
			$pdo = new \PDO('mysql:host=' . $PARAM_hote . '; dbname=' . $PARAM_nom_bd . ';charset=utf8', $PARAM_utilisateur, $PARAM_mot_passe,array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
		} catch (\Exception $e) {
			echo 'Erreur : ' . $e->getMessage() . '<br />';
			echo 'N° : ' . $e->getCode();
			die;
		}
		return $pdo;
	}


	public static function SessionOuverte()
	{
		// Vérifie si une session a été ouverte par l'utilisateur
		if (isset($_SESSION["mail"]))
			return true;
		else
			return false;
	}

	/**
	 * Établi les messages flash d'erreur ou de succès
	 * @param string $message
	 * @param string $type
	 */
	public static function setFlashMessage($message, $type)
	{
		switch ($type) {
			case 'valid':
				$_SESSION['valid'] = $message;
				if (isset($_SESSION['error'])) {
					unset($_SESSION['error']);
				}
				break;
			case 'error':
				$_SESSION['error'] = $message;
				if (isset($_SESSION['valid'])) {
					unset($_SESSION['valid']);
				}
				break;
			default:
				$_SESSION['error'] = "Erreur inconnue";
				break;
		}
	}
}
?>