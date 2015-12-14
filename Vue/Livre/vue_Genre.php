
<a href="?uc=Livre&action=voirauteur" class="boutonEC"> Recherche par auteur </a>
<a href="?uc=Livre&action=voiredition" class="boutonEC"> Recherche par edition</a>
<a href="?uc=Livre&action=voirTousLivre" class="boutonEC"> Voir tous les livre</a>
<br/><br/>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirGenre" method="POST" >

	<select name="Genre" onChange='submit(form)'>>
		<option value='0' selected>Choisir le Genre</option>
		<?php 

		foreach ($tabGenre as $cat)
		{   
			echo "<option value='".$cat['NumGenre']."'"; $NomGenre=$cat['NomGenre'];  echo ">".$cat['NomGenre']."</a></option>";
		} ?> 
	</select>
</form>

<br/><br/>
<?php
	

foreach ($TabLivreGenre as $Livre)
{
 ?>
 <table>
  <tr>
    <td> <?php echo 'Non: '.$Livre['Nom'];?> </td>
    <td> <?php echo 'CodeISBN : '.$Livre['CodeISBN'];?> </td>
    <td> <?php echo 'DateSortie: '.$Livre['DateSortie'];?> </td>
    <td> <?php echo 'Tarif: '.$Livre['Tarif'].'€';?> </td>
    <td align="center"> <a href='index.php?uc=Panier&action=ajouterProduit&ref=<?php echo $Livre['NumLivre'];?>'><img src='img/Panier/PanierAjouter.png'></a></td>
    <td align="center"> <a href='index.php?uc=Commentaire&action=voirCommentaire&ref=<?php echo $Livre['NumLivre'];?>'><img src='img/Divers/commentaire.png'></a></td>
  </tr>
</table>
<?php
}




