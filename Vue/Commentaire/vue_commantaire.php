<div class="SousCom">
	<p><?php echo 'Livre : '. $Livre->getNom() ?></p>
</div>

</br><a href="?uc=Commentaire&action=ajouterCommentaire" class="boutonEC"> Ajouter un Commentaire </a>
</br></br>

<?php
foreach ($TabCom as $Commentaire)
{
	?>
	<div class="Commentaire">
		<p class="SousCom"><?php echo 'Posté par '.$Commentaire['Prenom'];?>
			<?php echo 'le : '.Date::formaterDate($Commentaire['DateCom']);?></p>
			<?php echo 'Contenu : ';?></br>
			<?php echo $Commentaire['Com'];?> 
		</div>
	</br>
	<?php
}