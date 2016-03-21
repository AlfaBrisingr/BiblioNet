<?php use BiblioNet\Classe\Date; ?>

<p align="center">
	<a href="?uc=Livre&action=voirGenre" class="btn btn-primary"> Recherche par Genre </a>
	<a href="?uc=Livre&action=voirauteur" class="btn btn-primary"> Recherche par auteur </a>
	<a href="?uc=Livre&action=voirTousLivre" class="btn btn-default"> Voir tous les livres</a>
</p>
<br/><br/>

<div class="row">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirEdition" method="POST" >
		<div class="clear col-xs-12 col-sm-2">
			<select name="Edition" class="form-control" onChange='submit(form)'>>
				<option value='0' selected>Choisir l'édition </option>
				<?php

				foreach ($tabEdition as $cat)
				{
					echo "<option value='".$cat['NumEdition']."'"; $NomEdition=$cat['NomEdition'];  echo ">".$cat['NomEdition']."</a></option>";
				} ?>
			</select>
		</div>
	</form>
</div>
<br/><br/>


<div class="row">
	<div class="clear col-xs-12 col-sm-12">
		<div class="table-responsive">
			<div class="overflow-scroll-table-lg">
				<table class="table table-hover table-condensed table-bordered table-striped">
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
					foreach ($tabLesLivreDuneEdition as $Livre)
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
		</div>
	</div>
</div>
