<?php
	session_unset(); //efface toute les variables de session
	session_destroy(); // Detruit la session en cours.

	header('location:index.php');
	?>