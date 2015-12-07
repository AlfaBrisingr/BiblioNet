<?php
require_once "Modele/Livre/modele_livre.php";
if (isset($_REQUEST['action']))
  $action = $_REQUEST['action'];
else
  $action = "voirPanier";

switch ($action)
{
  case 'voirPanier' :
  include ('Vue/Panier/vue_panier.php');
  break;

  case 'ajouterProduit' :
  if(!isset($_SESSION['Panier'])){
    $_SESSION['Panier'] = new Panier();
  }

  $unProduit = new Produit($_GET['ref']);
  $_SESSION['Panier']->ajouterUnProduit($unProduit);
  header('Location:?uc=Panier');
  break;

  case 'supprimerProduit':
  $_SESSION['Panier']->supprimerUnProduit($_GET['ref']);
  if($_SESSION['Panier']->getNbProd() == 0)
  {
    unset($_SESSION['Panier']);
  }else{
    header('Location:?uc=Panier');
  }
  break;

  case 'augmenterProduit' : 
  $_SESSION['Panier']->augmenterQuantiteProduit($_GET['ref'],1);
  header('Location:?uc=Panier');
  break;

  case 'diminuerProduit' : 
  $_SESSION['Panier']->diminuerQuantiteProduit($_GET['ref'],1);
  if($_SESSION['Panier']->getNbProd() == 0)
  {
    unset($_SESSION['Panier']);
  }else{
    header('Location:?uc=Panier');
  }
  break;
}