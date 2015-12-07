<?php
require_once "Modele/Livre/modele_livre.php";
if (isset($_REQUEST['action']))
  $action = $_REQUEST['action'];
else
  $action = "voirPanier";

switch ($action)
{
  case 'voirPanier' :
  if(!isset($_SESSION['Panier'])){
    $_SESSION['Panier'] = new Panier();
  }

  include ('Vue/Panier/vue_panier.php');
  break;

  case 'ajouterProduit' :
  if(!isset($_SESSION['Panier'])){
    $_SESSION['Panier'] = new Panier();
  }

  $unProduit = new Produit($_GET['ref']);
  $_SESSION['Panier']->ajouterUnProduit($unProduit);
  break;

  case 'supprimerProduit':
  $_SESSION['Panier']->supprimerUnProduit($_GET['NumLivre']);
  break;

  case 'augmenterProduit' : 
  $_SESSION['Panier']->augmenterQuantiteProduit($_GET['NumLivre'],1);
  break;

  case 'diminuerProduit' : 
  $_SESSION['Panier']->diminuerQuantiteProduit($_GET['NumLivre'],1);
  break;
}