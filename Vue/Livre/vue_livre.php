<?php 
//var_dump($TabLivre);

foreach ($TabLivre as $Livre)
{
  ?>
  <table>
  <tr>
  <td> <?php echo 'Non: '.$Livre['Nom'];?> </td>
  <td> <?php echo 'CodeISBN : '.$Livre['CodeISBN'];?> </td>
  <td> <?php echo 'NumAuteur: '.$Livre['NumAuteur'];?> </td>
  <td> <?php echo 'DateSortie: '.$Livre['DateSortie'];?> </td>
  <td> <?php echo 'Tarif: '.$Livre['Tarif'];?> </td>
   <td align="center"> <a href='index.php?uc=Panier&action=ajouterProduit&ref=<?php echo $Livre['NumLivre'];?>'><img src='img/Panier/PanierAjouter.png'></a></td>
</tr>
</table>
<?php

}
