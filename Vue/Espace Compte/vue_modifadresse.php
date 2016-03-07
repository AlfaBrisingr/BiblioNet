<form action="?uc=MonCompte&action=ValiderModifAdresse" method="post">
	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<form class="form-inline">
				<div class="form-group">
					<label>Ancienne Adresse : </label>
					<input class="form-control" type="text" value="<?php echo $_SESSION['Adresse']; ?>" name="AdresseUser" disabled>
					<input class="form-control" type="text" value="<?php echo $_SESSION['CodePostal']; ?>" name="CodeUser" disabled>
					<input class="form-control" type="text" value="<?php echo $_SESSION['Ville']; ?>" name="VilleUser" disabled></br>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-xs-12">
			<form class="form-inline">
				<div class="form-group">
					<label>Nouveau Adresse : </label>
					<input class="form-control" type="text" name="NewAdresse" placeholder="Adresse">
					<input class="form-control" type="text" name="NewCode" placeholder="CodePostal">
					<input class="form-control" type="text" name="NewVille" placeholder="Ville"></br>
				</div>
			</form>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="clear col-sm-3 col-xs-3">
			<button class="btn btn-primary" type="submit">Valider</button>
			<a href="?uc=MonCompte" class="btn btn-default">Retour</a>
		</div>
	</div>
</form>