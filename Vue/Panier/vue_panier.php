<?php
$total = 0;
echo "Votre panier <br/>";
echo "<TABLE border=1>";
echo "<TR> <TD> Référence </TD>";
echo "<TD> Désignation </TD>";
echo "<TD> Prix </TD>";
echo "<TD> Quantite </TD>";
echo "<TD> Montant </TD>";
echo "<TD> Actions </TD> </TR>";

$coll = $_SESSION['Panier']->getProduitsPanier();	
foreach ($coll as $key => $value) { ?>
<TR> 
	<TD><?php echo $value -> getNumLivre(); ?></TD>
	<TD><?php echo $value -> getNom(); ?></TD>
	<TD><?php echo $value -> getPrix(); ?></TD>
	<TD><a href='index.php?uc=panier&action=diminuerProduit&ref=<?= $value->getRef(); ?>'><img src='img/Panier/EnleverMoins.png'/></a>  <?php echo $value -> getQte(); ?>  <a href='index.php?uc=panier&action=augmenterProduit&ref=<?= $value->getRef(); ?>'><img src='img/Panier/AjouterPlus.png'/></a></TD>
	<TD><?php echo $value -> getPrix()*$value ->getQte(); ?></TD>
	<TD><a href='index.php?uc=panier&action=supprimerProduit&ref=<?= $value->getRef(); ?>'><img src='img/Divers/poubelle.png'/></a><br/></TD>
</TR> 
<?php
} 
