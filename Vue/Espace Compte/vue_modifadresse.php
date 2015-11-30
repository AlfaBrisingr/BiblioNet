<form action="?uc=MonCompte&action=ValiderModifAdresse" method="post">
	<label>Ancienne Adresse : </label>
	<input type="text" value="<?php echo $_SESSION['Adresse']; ?>" name="AdresseUser" disabled><input type="text" value="<?php echo $_SESSION['CodePostal']; ?>" name="CodeUser" disabled><input type="text" value="<?php echo $_SESSION['Ville']; ?>" name="VilleUser" disabled></br>

	<label>Nouveau Adresse : </label>
	<input type="text" name="NewAdresse" placeholder="Adresse"><input type="text" name="NewCode" placeholder="CodePostal"><input type="text" name="NewVille" placeholder="Ville"></br>

	<button type="submit">Valider</button>
</form>