<div class="row">
    <div class="col-xs-12 col-sm-12">
        <p>Voici vos informations :</p>
         Votre Nom : <?php echo ''.$_SESSION['Nom'].''; ?>
        </br> Votre Prénom : <?php echo ''.$_SESSION['Prenom'].''; ?>
        </br> Votre Adresse mail : <?php echo ''.$_SESSION['mail'].''; ?>
        </br> Votre Adresse Postale : <?php echo ''.$_SESSION['Adresse'].', '.$_SESSION['CodePostal'].' '.$_SESSION['Ville'].''; ?>
    </div>
</div>
</br>
</br>
</br>
<div class="row">
    <div class="col-sm-12">
        <a href="?uc=MonCompte&action=modifPrenom" class="btn btn-primary"> Changer son Prénom </a>
        <a href="?uc=MonCompte&action=modifNom" class="btn btn-primary"> Changer son Nom </a>
        <a href="?uc=MonCompte&action=modifAdresse" class="btn btn-primary"> Changer son Adresse Postal </a>
    </div>
</div>


