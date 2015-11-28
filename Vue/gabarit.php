<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<title><?= $titre ?></title>
</head>

<body>					

	<nav class="menu">
		<div class="element_menu">
			<ul>
				<li><a href="?uc=Accueil" style="text-decoration:none "> Accueil</a></li>
				<li><a href="?uc=Livre" style="text-decoration:none"> Livres</a></li>
				<li><a href="?uc=Panier" style="text-decoration:none"> Panier</a></li>
				<?php
				if(isset($_SESSION['mail'])){
					?>
					<nav class="menuco">
						<div class="element_menu">
							<ul>
								<li><a href="?uc=MonCompte" style="text-decoration:none"> Mon Compte</a></li>
								<li><a href="?uc=Deconnexion" style="text-decoration:none"> Deconnexion</a></li>
							</ul>
						</div>
					</nav>
					<?php

				}else{
					?>
					<nav class="menuco">
						<div class="element_menu">
							<ul>
								<li><a href="?uc=Connexion" style="text-decoration:none"> Connexion</a></li>
								<li><a href="?uc=Inscription" style="text-decoration:none"> Inscription</a></li>
							</ul>
						</div>
					</nav>
					<?php
				}
				?>
			</ul>
		</div>
	</nav>
	
	<!--<div class="corps">
	<?= $contenu ?>
</div>-->
</body>

</html>	