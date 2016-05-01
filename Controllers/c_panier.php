<?php
use BiblioNet\Models\MLivre;
use BiblioNet\Models\MPanier;
use BiblioNet\Classes\Commande;
use BiblioNet\Classes\Panier;
use BiblioNet\Classes\Quantite;
use BiblioNet\Models\Main;
use BiblioNet\Models\MCompte;

if (isset($_REQUEST['action']))
  $action = $_REQUEST['action'];
else
  $action = "voirPanier";

switch ($action)
{
  case 'voirPanier' :
    require_once ROOT.'Views/Panier/vue_panier.php';
    break;

  case 'ajouterProduit' :
    try {
      if (!isset($_SESSION['Panier'])) {
        $_SESSION['Panier'] = new Panier();
      }

      $unProduit = MLivre::getUnLivre($_GET['ref']);
      if (($unProduit->getQuantiteStock() - 1) < 0) {
        Main::setFlashMessage('Quantitée en stock insuffisante.', 'error');
        if ($_SESSION['Panier ']->getNbProd === 0) {
          unset($_SESSION['Panier']);
        }
        header('Location:?uc=Livre&action=voirDetails&livre='.$_GET['ref']);
      } else {
        $unProduit->setQte(1);
        $_SESSION['Panier']->ajouterUnProduit($unProduit, 1);
        Main::setFlashMessage('Livre ajouté au panier. <a href=\'?uc=Panier\'>Voir mon panier</a>', 'valid');
      }
      header('Location:?uc=Livre&action=voirDetails&livre='.$_GET['ref']);
    }catch (Exception $e){
      Main::setFlashMessage($e->getMessage(), 'error');

    }
    break;

  case 'supprimerProduit':
    $_SESSION['Panier']->supprimerUnProduit($_GET['ref']);
    if($_SESSION['Panier']->getNbProd() == 0)
    {
      unset($_SESSION['Panier']);
      header('Location:?uc=Panier');
    }else{
      header('Location:?uc=Panier');
    }
    break;

  case 'augmenterProduit' :
    try {
      $unProduit = MLivre::getUnLivre($_GET['ref']);
      if (($_SESSION['Panier']->getCollProduit()->getElement($_GET['ref'])->getQte()) > ($unProduit->getQuantiteStock() -1 )) {
        Main::setFlashMessage('Quantitée en stock insuffisante.', 'error');
      }else {
        $_SESSION['Panier']->augmenterQuantiteProduit($_GET['ref'], 1);
      }
    }catch (Exception $e){
      Main::setFlashMessage($e->getMessage(), 'error');
    }
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

  case 'validerCommande' :
    try{
      if(isset($_POST['nom']) && !empty($_POST['nom']) && !empty($_POST['annee']) && !empty($_POST['mois']) && !empty($_POST['carte']) && !empty($_POST['cvc'])){
        $user = MCompte::getUnUser($_SESSION['mail']);
        $commande = new Commande(1,$user,date('Y-m-d'));
        $idCommande = MPanier::AjouterCommande($commande);
        $uneCommande = MPanier::getUneCommande($idCommande);
        foreach ($_SESSION['Panier']->getProduitsPanier() as $livre){
          $quantite = new Quantite($livre,$uneCommande,$livre->getQte());
          MPanier::AjouterCommandeProduit($quantite);
          unset($_SESSION['Panier']);
          Main::setFlashMessage('Votre commande a été pris en compte.','valid');
          header('Location:?uc=accueil');
        }
      }else {
        require_once ROOT.'Views/Panier/vue_commande.php';
      }
    }catch (\Exception $e){
      Main::setFlashMessage($e->getMessage(), 'error');
    }

    break;
}