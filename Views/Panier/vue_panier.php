<?php
use BiblioNet\Models\Main;

require_once ROOT.'Views/vue_Alert.php';
if(Main::SessionOuverte() == true)
{
	if(isset($_SESSION['Panier'])){

		$total = 0;
		?>
		<p align="center">Votre panier</p> <br/>
		<div class="row">
			<div class="clear col-xs-12 col-sm-12">
				<div class="table-responsive">
					<div class="overflow-scroll-table-lg">
						<table class="table table-hover table-condensed table-bordered table-striped">
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
									<TD headers="NumLivre"><?php echo $value->getNumLivre(); ?></TD>
									<TD><?php echo $value->getNom(); ?></TD>
									<TD><?php echo $value->getTarif()." euros"; ?></TD>
									<TD headers="quantite"><a href='index.php?uc=Panier&action=diminuerProduit&ref=<?= $value->getNumLivre(); ?>'><span class="glyphicon glyphicon-minus"></span></a>  <?php echo $value->getQte(); ?>  <a href='index.php?uc=Panier&action=augmenterProduit&ref=<?= $value->getNumLivre(); ?>'><span class="glyphicon glyphicon-plus"></span></a></TD>
									<TD><?php echo $value->getTarif()*$value->getQte()." euros"; ?></TD>
									<TD><a href='index.php?uc=Panier&action=supprimerProduit&ref=<?= $value->getNumLivre(); ?>'><span class="glyphicon glyphicon-trash"></span></a><br/></TD>
									<?php $total = $total + $value->getTarif()*$value->getQte(); $_SESSION['Total'] = $total; ?>
								</TR>
								<?php
							} ?>
						</table>
					</div>

				</div>
			</div>
		</div>
		</br>

		<div class="row">
			<?php echo "Total du prix à payer : ".$total. " euros"; ?></br></br>
			<a href="?uc=Panier&action=validerCommande" class="btn btn-primary"> Valider la Commande </a>
			<a href="?uc=index" class="btn btn-default">Retour</a>
		</div>
		<?php
	}else{

		echo "Votre panier est vide";
	}
}else{
	echo "Vous devez être connecté pour avoir accès au Panier";
}
