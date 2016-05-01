<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 25/04/2016
 * Time: 09:54
 */
use BiblioNet\Models\Main;
use BiblioNet\Models\MLivre;

if (isset($_REQUEST['action']))
    $action = $_REQUEST['action'];
else
    $action = "Accueil";

switch($action) {

    case 'Accueil' :
        try {
            $TabLivre = MLivre::getLivreRand();
            require_once ROOT.'Views/Accueil/vue_accueil.php';
        } catch (Exception $e) {
            Main::setFlashMessage($e->getMessage(), 'error');
            header('Location:?uc=accueil');
        }
        break;

}
