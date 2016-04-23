<?php use BiblioNet\Classes\Date;

require_once ROOT.'Views/vue_Alert.php';?>

<p align="center">
	<a href="?uc=Livre&action=voirauteur" class="btn btn-primary"> Recherche par auteur </a>
	<a href="?uc=Livre&action=voirEdition" class="btn btn-primary"> Recherche par edition</a>
	<a href="?uc=Livre&action=voirTousLivre" class="btn btn-default"> Voir tous les livres</a>
</p>

<br/><br/>

<div class="row">
	<form action="<?php echo $_SERVER['PHP_SELF'];?>?uc=Livre&action=voirGenre" method="POST" >
		<div class="clear col-xs-12 col-sm-2">
			<select name="Genre" class="form-control" onChange='submit(form)'>>
				<option value='0' selected>Choisir le Genre</option>
				<?php

				foreach ($tabGenre->getCollection() as $cat)
				{
					echo "<option value='".$cat->getNumGenre()."'"; $NomGenre=$cat->getNomGenre();  echo ">".$cat->getNomGenre()."</a></option>";
				} ?>
			</select>
		</div>
	</form>
</div>

<br/><br/>


<div class="row">

	<?php
	foreach ($TabLivreGenre->getCollection() as $Livre)
	{
		?>
		<div class="col-xs-12 col-sm-3 col-centered">
			<div class="thumbnail">
				<h5 align="center"><?php echo $Livre->getNom();?></h5>
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
