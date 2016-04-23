<?php
/**
 * Created by PhpStorm.
 * User: oceane
 * Date: 18/04/2016
 * Time: 14:16
 */

require_once ROOT.'Views/vue_Alert.php';
?>
<form method="post" action="?uc=Panier&action=validerCommande" >
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label>Nom et Prénom du Titulaire</label>
                <input class="form-control" type="text" placeholder="Ex : Jean Martin" name="nom" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label>Numéro de la carte (16 chiffres)</label>
                <input class="form-control" type="number" min="1000000000000000" max="9999999999999999" maxlength="16" minlength="16" name="carte" required />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-2">
            <label>Mois</label>
            <input class="form-control" type="number" placeholder="Ex : 01" name="mois" maxlength="2" min="01" max="31" required />
        </div>
        <div class="col-xs-12 col-sm-2">
            <label>Année</label>
            <input class="form-control" type="number" placeholder="Ex : 2017" name="annee" maxlength="4" min="2016" max="2025" required />
        </div>
        <div class="col-xs-12 col-sm-2">
            <label>CVC</label>
            <input class="form-control" type="number" placeholder="302" name="cvc" maxlength="3" required />
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <h4>Total à Payer : <?php echo $_SESSION['Total'].' euros'; ?></h4>
                <button type="submit" class="btn btn-primary"> Payer la Commande </button>
            </div>
        </div>
    </div>
</form>