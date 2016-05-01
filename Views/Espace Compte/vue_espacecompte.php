<?php

require_once ROOT.'Views/vue_Alert.php';

?>

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
        <a href="?uc=MonCompte&action=VoirModifEspaceCompte" class="btn btn-primary"> Modification du Compte </a>
    </div>
</div>


