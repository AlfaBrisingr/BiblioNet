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