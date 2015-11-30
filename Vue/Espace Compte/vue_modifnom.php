<form action="?uc=MonCompte&action=ValiderModifNom" method="post">
	<label>Ancienne Nom : </label>
	<input type="text" value="<?php echo $_SESSION['Nom']; ?>" name="NomUser" disabled></br>

	<label>Nouveau Nom : </label>
	<input type="text" name="NewNom"></br>

	<button type="submit">Valider</button>
</form>