<form action="?uc=MonCompte&action=ValiderModifPrenom">
	<label>Ancienne Prénom : </label>
	<input type="text" value="<?php echo $_SESSION['Prenom']; ?>" name="PrenomUser" disabled></br>

	<label>Nouveau Prénom : </label>
	<input type="text" name="NewPrenom"></br>

	<button type="submit">Valider</button>
</form>