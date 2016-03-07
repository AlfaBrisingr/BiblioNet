<form action="?uc=MonCompte&action=ValiderModifNom" method="post">
	<div class="row">
		<div class="col-sm-3 col-xs-3">
			<label>Ancienne Nom : </label>
			<input class="form-control" type="text" value="<?php echo $_SESSION['Nom']; ?>" name="NomUser" disabled></br>
		</div>
		<div class="col-sm-3 col-xs-3">
			<label>Nouveau Nom : </label>
			<input class="form-control" type="text" name="NewNom"></br>
		</div>
	</div>
	<div class="row">
		<div class="clear col-sm-3 col-xs-3">
			<button class="btn btn-primary" type="submit">Valider</button>
			<a href="?uc=MonCompte" class="btn btn-default">Retour</a>
		</div>
	</div>
</form>