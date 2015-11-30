<? echo 'Voici vos informations :';?> 
</br>
</br> Votre Nom : <?php echo ''.$_SESSION['Nom'].''; ?>
</br> Votre Prénom : <?php echo ''.$_SESSION['Prenom'].''; ?>
</br> Votre Adresse mail : <?php echo ''.$_SESSION['mail'].''; ?>
</br> Votre Adresse Postale : <?php echo ''.$_SESSION['Adresse'].', '.$_SESSION['CodePostal'].' '.$_SESSION['Ville'].''; ?>
</br>
</br>
</br><a href="?uc=MonCompte&action=modifPrenom" class="boutonEC"> Changer son Prénom </a>
<a href="?uc=MonCompte&action=modifNom" class="boutonEC"> Changer son Nom </a>
<a href="?uc=MonCompte&action=modifAdresse" class="boutonEC"> Changer son Adresse Postal </a>



