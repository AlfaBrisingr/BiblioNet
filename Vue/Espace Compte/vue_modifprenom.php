<form action="?uc=MonCompte&action=ValiderModifPrenom" method="post">
	<div class="row">
		<div class="col-sm-3 col-xs-3">
			<label>Ancienne Prénom : </label>
			<input class="form-control" type="text" value="<?php echo $_SESSION['Prenom']; ?>" name="PrenomUser" disabled></br>
		</div>
		<div class="col-sm-3 col-xs-3">
			<label>Nouveau Prénom : </label>
			<input class="form-control" type="text" name="NewPrenom"></br>
		</div>
	</div>
	<div class="row">
		<div class="clear col-sm-3 col-xs-3">
			<button class="btn btn-primary" type="submit">Valider</button>
			<a href="?uc=MonCompte" class="btn btn-default">Retour</a>
		</div>
	</div>
</form>