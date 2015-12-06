<?php 
require_once "Classe/Panier/panier.php";
require_once "Classe/Panier/produit.php";
require_once "Modele/Livre/modele_livre.php";
$unProd = new Produit("1");
var_dump($unProd);
$unProd -> augmenterQuantite(1);
var_dump($unProd);

$_SESSION['Panier'] = new Panier();
$unNewProd = new Produit("2");
$unProdBis = new Produit("3");
var_dump($_SESSION['Panier']);
var_dump($unNewProd);
var_dump($unProdBis);
$_SESSION['Panier'] -> ajouterUnProduit($unProd);
var_dump($_SESSION['Panier']);
$_SESSION['Panier'] -> ajouterUnProduit($unNewProd);
var_dump($_SESSION['Panier']);
$_SESSION['Panier'] -> ajouterUnProduit($unProd);
var_dump($_SESSION['Panier']);
$_SESSION['Panier'] -> ajouterUnProduit($unProdBis);
var_dump($_SESSION['Panier']);
$_SESSION['Panier'] -> diminuerQuantiteProduit($unProdBis->getRef(), 1);
var_dump($_SESSION['Panier']);

?>