<?php use BiblioNet\Classes\Date;
require_once ROOT.'Views/vue_Alert.php';
?>

<p align="center">
	<a href="?uc=Livre&action=voirGenre" class="btn btn-primary"> Recherche par Genre </a>
	<a href="?uc=Livre&action=voirEdition" class="btn btn-primary"> Recherche par edition</a>
	<a href="?uc=Livre&action=voirTousLivre" class="btn btn-default"> Voir tous les livres</a>
</p>
<br/><br/>

<div class="row">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirauteur" method="POST" >
		<div class="clear col-xs-12 col-sm-2">
			<select name="Auteur" class="form-control" onChange='submit(form)'>>
				<option value='0' selected>Choisir l'auteur</option>
				<?php

				foreach ($tabAuteur->getCollection() as $cat)
				{
					echo "<option value='".$cat->getNumAuteur()."'"; $NomAuteur=$cat->getNomAuteur(); echo ">".$cat->getNomAuteur()."</option>";
				} ?>
			</select>
		</div>
	</form>
</div>
<br/><br/>
<div class="row">

	<?php
	foreach ($tabLesLivreDunAuteur->getCollection() as $Livre)
	{
		?>
		<div class="col-xs-12 col-sm-3 col-centered">
			<div class="thumbnail">
				<?php if($Livre->getTaille($Livre->getNom())>30){ ?>
					<h5 align="center"><?php echo substr($Livre->getNom(),0,30).'...';?></h5>
				<?php } else { ?>
					<h5 align="center"><?php echo $Livre->getNom();?></h5>
				<?php } ?>
				<img class="img-responsive"  src=<?php echo $Livre->getCouverture();?>  /><br/>
				<div class="caption">
					<?php echo "Genre : ".$Livre->getGenre()->getNomGenre();?><br/>
					<?php echo "Prix : ".$Livre->getTarif().'€';?><br/>
					<a class="btn btn-primary" href='?uc=Livre&action=voirDetails&livre=<?php echo $Livre->getNumLivre();?>'>Détails</a>
				</div>
			</div>
		</div>
		<?php
	} ?>
</div>
