</br><a href="?uc=Livre&action=voirGenre" class="boutonEC"> Recherche par Genre </a>
<a href="?uc=Livre&action=voiredition" class="boutonEC"> Recherche par edition</a>
<a href="?uc=Livre&action=voirTousLivre" class="boutonEC"> Voir tous les livre</a>
<br/><br/>


<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirauteur" method="POST" >

	<select name="Auteur" onChange='submit(form)'>>
		<option value='0' selected>Choisir l'auteur</option>
		<?php 

		foreach ($tabAuteur as $cat)
		{   
			echo "<option value='".$cat['NumAuteur']."'"; $NomAuteur=$cat['NomAuteur']; echo ">".$cat['NomAuteur']."</option>";
		} ?> 
	</select>
	
</form>
<br/><br/>
