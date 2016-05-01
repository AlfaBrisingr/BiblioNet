<?php
/**
 * Created by PhpStorm.
 * User: Océane
 * Date: 07/04/2016
 * Time: 14:18
 */
namespace BiblioNet;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__.DS);

require_once ROOT.'vendor/autoload.php';
date_default_timezone_set('Europe/Paris');

use BiblioNet\Models\Main;
use BiblioNet\Classes\Date;

session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
    <title>BiblioNet</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="Ressources/css/usebootstrap.css">
    <link type='text/css' rel='stylesheet' href='Ressources/css/main.css'/>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="Ressources/js/bootstrap.min.js"></script>
    <script src="Ressources/js/usebootstrap.js"></script>
</head>


<body class="background">
<!-- Le menu -->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?uc=Accueil">BiblioNet</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="?uc=Accueil">Accueil</a></li>
                <li><a href="?uc=Livre">Livre</a></li>
                <li><a href="?uc=Panier">Panier</a></li>

            </ul>
            <?php
            if(isset($_SESSION['mail'])){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?uc=MonCompte">Mon Compte</a></li>
                    <li><a href="?uc=Deconnexion">Déconnexion</a></li>
                </ul>
                <?php
            }else{
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?uc=Connexion">Connexion</a></li>
                    <li><a href="?uc=Inscription">Inscription</a></li>
                </ul>
                <?php
            }
            ?>
        </div><!-- /.navbar-collapse -->
    </div>
</div>
<div class='container'>
    <div class='jumbotron'>
        <!-- Le corps -->
        <?php if (isset($_GET['uc']))
        {
            switch ($_GET['uc'])
            {
                case 'Accueil' : include("Controllers/c_accueil.php"); break;
                case 'Panier' : include("Controllers/c_panier.php"); break;
                case 'MonCompte' : include("Controllers/c_espacecompte.php"); break;
                case 'Connexion' : include("Controllers/c_connexion.php"); break;
                case 'Inscription' :  include("Controllers/c_inscription.php"); break;
                case 'Livre' :  include("Controllers/c_livre.php"); break;
                case 'Deconnexion' :  include("Controllers/Deconnexion.php"); break;
                case 'Commentaire' : include("Controllers/c_commentaire.php"); break;
                default : include("Views/Accueil/vue_accueil.php"); break;
            }
        }
        else
        {
            header('Location:?uc=Accueil');
        }

        ?>
    </div>
</div>


</body>

<!--<footer id="pied_de_page">
    <p> Copyright by BiblioNet, tous droits réservés </p>
</footer>-->
</html>
