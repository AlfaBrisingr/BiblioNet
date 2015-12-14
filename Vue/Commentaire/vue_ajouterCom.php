<?php
if(SessionOuverte() == true)
{ 
	?>
	<div class="SousCom">
		<form method="post" action="?uc=Commentaire&action=ValiderCommentaire">
			<p>Ajouter un Commentaire !</p>
			<p>
				<label name ="Com">Contenu du Commentaire</label></br>
				<textarea name = "Contenu" rows="10" cols="50"></textarea></br>
				<input type="submit" />
			</p>

		</form>
	</div>
	<?php
}else{ 
	?>
	Vous devez être connecté pour avoir accès à cette page.
	<?php
}