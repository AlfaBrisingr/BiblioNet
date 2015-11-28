<form action="?uc=MonCompte&action=ValiderModifMail">
	<label>Ancienne Adresse Mail : </label>
	<input type="email" value="<?php echo $_SESSION['mail']; ?>" name="MailUser" disabled></br>

	<label>Nouvelle Adresse Mail : </label>
	<input type="email" name="NewMail"></br>

	<button type="submit">Valider</button>
</form>