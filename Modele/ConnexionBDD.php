<?php
// Connexion à la base de données
function BDDConnexionPDO()
{
  $PARAM_hote='localhost'; 	$PARAM_port='3066';
  $PARAM_nom_bd='2014-biblionet_base'; 	$PARAM_utilisateur='root'; 
  $PARAM_mot_passe=''; 
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
 if(isset($_SESSION["login"]))
  return true;
else
  return false;
}

function EtreUtilisateur()
{
 // Vérifie si c'est une famille qui est connectée
  if (isset($_SESSION["login"]))
  {
   if ($_SESSION["groupe"]=="Utilisateur")
    return true;
  else
    return false;
}
else
 return false;
}

function EtreAdministrateur()
{
 // Vérifie si c'est un enseignant qui est connecté
  if (SessionOuverte())
  {
   if ($_SESSION["groupe"]=="Administrateur")
    return true;
  else
    return false;
}
else
 return false;
}
?>