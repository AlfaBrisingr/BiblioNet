<?php
if(isset($_SESSION['Panier'])){

	$total = 0;
	?>
	<p align="center">Votre panier</p> <br/>
	<div class="Tableau">
		<table>
			<TR> 
				<TD> Référence </TD>
				<TD> Désignation </TD>
				<TD> Prix </TD>
				<TD> Quantite </TD>
				<TD> Montant </TD>
				<TD> Actions </TD> 
			</TR>
			<?php
			$coll = $_SESSION['Panier']->getProduitsPanier();	
			foreach ($coll as $key => $value) { ?>

			<TR> 
				<TD headers="NumLivre"><?php echo $value -> getRef(); ?></TD>
				<TD><?php echo $value -> getLib(); ?></TD>
				<TD><?php echo $value -> getPrix()." euros"; ?></TD>
				<TD headers="quantite"><a href='index.php?uc=Panier&action=diminuerProduit&ref=<?= $value->getRef(); ?>'><img src='img/Panier/EnleverMoins.png'/></a>  <?php echo $value -> getQte(); ?>  <a href='index.php?uc=Panier&action=augmenterProduit&ref=<?= $value->getRef(); ?>'><img src='img/Panier/AjouterPlus.png'/></a></TD>
				<TD><?php echo $value -> getPrix()*$value ->getQte()." euros"; ?></TD>
				<TD><a href='index.php?uc=Panier&action=supprimerProduit&ref=<?= $value->getRef(); ?>'><img src='img/Divers/poubelle.png'/></a><br/></TD>
				<?php $total = $total + $value -> getPrix()*$value ->getQte(); ?>
			</TR>
			<?php
		} ?>
	</table>
</div> </br>

<?php echo "Total du prix à payer : ".$total. " euros"; ?></br></br>
<a href="?uc=Panier&action=validerCommande" class="boutonEC"> Valider la Commande </a>
<?php
}else{

	echo "Votre panier est vide";
}
