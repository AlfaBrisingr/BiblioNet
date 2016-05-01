<?php

require_once ROOT.'Views/vue_Alert.php';
?>

<div class="row row-centered">
    <h4 class="text-center">4 Livres provenant de chez BiblioNet</h4><br/>
    <?php
    foreach ($TabLivre->getCollection() as $Livre)
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
