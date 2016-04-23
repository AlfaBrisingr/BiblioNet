<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 21/04/2016
 * Time: 20:00
 */
require_once ROOT.'Views/vue_Alert.php';

?>
<form action="?uc=MonCompte&action=ModifEspaceCompte" method="post">
	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<div class="col-sm-3 col-xs-3">
				<form class="form-inline">
					<div class="form-group">
						<label>Adresse Postal : </label>
						<input class="form-control" type="text" name="adresse" placeholder="<?php echo $_SESSION['Adresse']; ?>">
						<input class="form-control" type="number" maxlength="5" minlength="5" min="01000" max="99999" name="cp" placeholder="<?php echo $_SESSION['CodePostal']; ?>">
						<input class="form-control" type="text" name="ville" placeholder="<?php echo $_SESSION['Ville']; ?>"><br/>
					</div>
				</form>
			</div>
			<div class="col-sm-3 col-xs-3">
				<label>Nom : </label>
				<input class="form-control" type="text" name="nom" placeholder="<?php echo $_SESSION['Nom']; ?>"><br/>
			</div>
			<div class="col-sm-3 col-xs-3">
				<label>Prénom : </label>
				<input class="form-control" type="text" name="prenom" placeholder="<?php echo $_SESSION['Prenom']; ?>"><br/>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="clear col-sm-3 col-xs-3">
			<button class="btn btn-primary" type="submit">Valider</button>
			<a href="?uc=MonCompte" class="btn btn-default">Retour</a>
		</div>
	</div>
</form>