<p align="center">
</br><a href="?uc=Livre&action=voirGenre" class="boutonEC"> Recherche par Genre </a>
<a href="?uc=Livre&action=voirauteur" class="boutonEC"> Recherche par auteur </a>
<a href="?uc=Livre&action=voirEdition" class="boutonEC"> Recherche par edition</a>
</p>
</br>
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
		foreach ($TabLivre as $Livre)
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
