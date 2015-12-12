</br><a href="?uc=Livre&action=voirGenre" class="boutonEC"> Recherche par Genre </a>
<a href="?uc=Livre&action=voiredition" class="boutonEC"> Recherche par edition</a>
<a href="?uc=Livre&action=voirTousLivre" class="boutonEC"> Voir tous les livre</a>
<br/><br/>


<from action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirLivre" method"POST" >
	<select name="Genre" >
		<option value='0' selected>Choisir l'auteur</option>
		<?php 

		foreach ($tabAuteur as $cat)
		{   
			echo "<option value='".$cat['NumGenre']."'"; $NomGenre=$cat['NomGenre']; echo ">".$cat['NomGenre']."</option>";
		} ?> 
	</select>
	<!--<input name="valider" type="submit" value="Go" title="valider pour aller à la page sélectionnée" />-->
</form>
<br/><br/>
