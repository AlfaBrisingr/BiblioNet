<?php use BiblioNet\Models\Main;

require_once ROOT.'Views/vue_Alert.php';
?>

<?php
if(Main::SessionOuverte() == false)
{
    ?>
    <form method="post" action="?uc=Connexion&action=Connexion">

        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="form-group">
                    <label><b>Adresse Mail:</b><font color="#FF0000">*</font></label>
                    <input class="form-control" type="text" placeholder="Adresse Mail" name="mail"   size="20" required />
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <div class="form-group">
                    <label for="mdp"><b>Mot de passe :</b><font color="#FF0000">*</font></label>
                    <input class="form-control" type="password" placeholder="Votre mot de passe" name="mdp" id="mdp" size="20" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="clear col-xs-12 col-sm-3">
                <input class="btn btn-primary" type="submit" />
            </div>
        </div>
    </form>

    Les champs marqués d'un <font color="#FF0000">*</font> sont obligatoires !
    <?php
}else{ ?>
    Vous êtes déjà connecté !
    <?php
}
