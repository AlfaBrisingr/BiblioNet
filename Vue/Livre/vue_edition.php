</br><a href="?uc=Livre&action=voirGenre" class="boutonEC"> Recherche par Genre </a>
<a href="?uc=Livre&action=voirauteur" class="boutonEC"> Recherche par auteur </a>
<a href="?uc=Livre&action=voirTousLivre" class="boutonEC"> Voir tous les livre</a>
</br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirGenre" method="POST" >

	<select name="Edition" onChange='submit(form)'>>
		<option value='0' selected>Choisir l'édition </option>
		<?php 

		foreach ($tabEdition as $cat)
		{   
			echo "<option value='".$cat['NumEdition']."'"; $NomEdition=$cat['NomEdition'];  echo ">".$cat['NomEdition']."</a></option>";
		} ?> 
	</select>
</form>

<br/><br/>


<div class="Tableau">

	<table>
		<TR> 
			<TD> Nom </TD>
			<TD> CodeISBN </TD>
			<TD> Genre </TD>
			<TD> Date de Sortie </TD>
			<TD> Prix </TD>
			<TD> Ajouter Panier </TD> 
			<td> Ajouter Commentaire </td>
		</TR>
		<?php 
		foreach ($TabLivreGenre as $Livre)
		{
			?>

			<tr>
				<td> <?php echo $Livre['Nom'];?> </td>
				<td> <?php echo $Livre['CodeISBN'];?> </td>
				<td> <?php echo $Livre['NomGenre'];?> </td>
				<td> <?php echo Date::formaterDate($Livre['DateSortie']);?> </td>
				<td> <?php echo $Livre['Tarif'].'€';?> </td>
				<td align="center"> <a href='index.php?uc=Panier&action=ajouterProduit&ref=<?php echo $Livre['NumLivre'];?>'><img src='img/Panier/PanierAjouter.png'></a></td>
				<td align="center"> <a href='index.php?uc=Commentaire&action=voirCommentaire&ref=<?php echo $Livre['NumLivre'];?>'><img src='img/Divers/commentaire.png'></a></td>
			</tr>

			<?php
		} ?>
	</table>
</div>


