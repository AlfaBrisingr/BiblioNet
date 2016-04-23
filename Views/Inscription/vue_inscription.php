<?php

require_once ROOT.'Views/vue_Alert.php';

?>
<div class="row">
  <div align="center" > Formulaire d'inscription ! </div></font>
</div>

<form method="post" action="?uc=Inscription&action=Inscription" >
  <p align="center">
  <div class="row">
      <div class="col-xs-12 col-sm-3">
        <div class="form-group">
        <b>Nom:</b><font color="#FF0000">*</font>
        <input class="form-control" type="text" placeholder="nom" name="nom"   size="20" required />
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <b>Prénom:</b><font color="#FF0000">*</font>
        <input class="form-control" type="text" placeholder="Prenom" name="prenom"   size="20" required />

      </div>
    </div>
  </div>

  <div class="row">
    <div class="clear col-xs-12 col-sm-3">
      <div class="form-group">
        <label for="msg" ><b>E-mail :</b><font color="#FF0000">*</font> </label>
        <input class="form-control" type="email" placeholder="Votre adresse E-mail" name="mail" id="email" size="20" required/>

      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <b>Mot de passe:</b><font color="#FF0000">*</font>
        <input class="form-control" type="password" placeholder="Votre mot de passe" name="mdp"   size="20" required />

      </div>
    </div>
  </div>
  <div class="row">
    <div class="clear col-xs-12 col-sm-3">
      <div class="form-group">
        <b>Adresse:</b><font color="#FF0000">*</font>
        <input class="form-control" type="text" placeholder="Adresse" name="adresse"   size="20" required />
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <b>Code Postal:</b><font color="#FF0000">*</font>
        <input class="form-control" type="text" placeholder="CodePostal" name="code"   size="20" required />
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="form-group">
        <b>Ville:</b><font color="#FF0000">*</font>
        <input class="form-control" type="text" placeholder="Ville" name="ville"   size="20" required />

      </div>
    </div>
  </div>
  <div class="row">
    <div class="clear col-xs-12 col-sm-3">
      <input class="btn btn-primary" type="submit" /> <input class="btn btn-default" type="reset" />
    </div>
  </div>
</form>
</font></p>

<?php if(isset($_SESSION['error'])) { unset($_SESSION['error']); } ?>