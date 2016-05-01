<?php
/**
 * Created by PhpStorm.
 * User: Océane
 * Date: 01/05/2016
 * Time: 20:49
 */
use BiblioNet\Classes\Date;

require_once ROOT.'Views/vue_Alert.php';

if ($tabCommandes->taille() != 0){
?>

<div class="row">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=MonCompte&action=HistoriqueCommande" method="POST" >
        <div class="clear col-xs-12 col-sm-2">
            <select name="Commande" class="form-control" onChange='submit(form)'>>
                <option value='0' selected>Selectionner une Commande</option>
                <?php

                foreach ($tabCommandes->getCollection() as $commande)
                {
                    echo "<option value='".$commande->getNumCommande()."'"; echo ">".'Commande n°'.$commande->getNumCommande().' Achetée le '.Date::formaterDateFr($commande->getDateCommande())."</option>";
                } ?>
            </select>
        </div>
    </form>
</div>
<?php if (isset($_POST['Commande'])) {
    $total = 0;
    ?>
    <div class="row">
        <div class="row row-centered">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <h2>Commande n°<?= $commande->getNumCommande() ?></h2>
                <table class="table table-hover table-stripped table-bordered">
                    <thead>
                    <tr>
                        <th>Livre</th>
                        <th>Prix unitaire</th>
                        <th>Quantité achetée</th>
                        <th>Sous-total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($tabLivres->getCollection() as $Livre) {
                        ?>

                        <tr>
                            <td><?= $Livre->getLivre()->getNom() ?></td>
                            <td><?= $Livre->getLivre()->getTarif().' euros' ?></td>
                            <td><?= $Livre->getQuantite() ?></td>
                            <td><?= $Livre->getLivre()->getTarif()*$Livre->getQuantite() .' euros'; ?></td>
                            <?php $total = $total + $Livre->getLivre()->getTarif()*$Livre->getQuantite(); $_SESSION['Total'] = $total; ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php echo "Total de la Commande : ".$total. " euros"; ?></br></br>
            </div>
        </div>
    </div>
    <div class="row">

        <a href="?uc=MonCompte" class="btn btn-default">Retour</a>
    </div>
<?php }


}else{
    echo 'Aucune Commande Achetée';
}
?>

