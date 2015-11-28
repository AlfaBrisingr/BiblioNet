<?php

//Chargement du modèle contenant mes appels à la base de données
require_once ('Modeles/livre.php');
require_once ('Modeles/m_Categorie.php');

if (isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else
$action = "voirCategories";

switch ($action)
{
	case 'voirCategories' :   

			//Liste déroulante présentant les catégories 
			$tabcategorie = getCategorieslivre();
			//Appel de la vue
			include ('Vues/livre/v_VoirCategories.php');
			break;

	case 'voirProduits' :
			// Si déjà un POST de la liste déroulante
			if (isset($_POST['categorie']))
			     $categ=$_POST['categorie'];
			else
			     $categ='1';

			//Liste déroulante présentant les catégories 
			$tabcategorie = getCategoriesFleurs();

			// Rercherche des fleurs
			$tabfleurs = getLesFleursCat($categ);
			//Appel de la vue
			include ('Vues/livre/v_VoirProduits.php');
			break;
			
		  
	
}
