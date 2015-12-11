<from action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirLivre" method"POST" >
	<select name="Genre" >
		<option value='0' selected>Choisir le Genre</option>
		<?php 

		foreach ($tabGenre as $cat)
		{   
			echo "<option value='".$cat['NumGenre']."'"; $NomGenre=$cat['NomGenre']; echo ">".$cat['NomGenre']."</option>";
		} ?> 
	</select>
	<!--<input name="valider" type="submit" value="Go" title="valider pour aller à la page sélectionnée" />-->
</form>
<br/><br/>
<?php
echo $cat['NomGenre'];
echo $cat['NumGenre'];

//onChange='submit(form)'

