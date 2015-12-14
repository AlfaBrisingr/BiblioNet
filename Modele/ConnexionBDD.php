<?php
// Connexion à la base de données
function BDDConnexionPDO()
{
	$PARAM_hote='btsinfo-rousseau53.fr:33017'; 	
	$PARAM_nom_bd='2014-biblionet_base'; 	$PARAM_utilisateur='2014-biblionet'; 
	$PARAM_mot_passe='123456'; 
	try
	{      $connexion = new PDO('mysql:host='.$PARAM_hote.'; dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
}
catch(Exception $e)
{     echo 'Erreur : '.$e->getMessage().'<br />';
echo 'N° : '.$e->getCode();
die;
} 
return $connexion;
} 


function SessionOuverte()
{
 // Vérifie si une session a été ouverte par l'utilisateur
	if(isset($_SESSION["mail"]))
		return true;
	else
		return false;
}

?>