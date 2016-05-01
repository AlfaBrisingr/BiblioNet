<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 18/04/2016
 * Time: 17:10
 */
use BiblioNet\Classes\Date;use BiblioNet\Models\Main;

require_once ROOT.'Views/vue_Alert.php';
?>

<p align="center">
    <a href="?uc=Livre&action=voirTousLivre" class="btn btn-default"> Voir tous les livres</a>
</p>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="thumbnail">
            <div class="caption">
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <h4><?php echo $Livre->getNom();?></h4>
                        <img class="img-responsive"  src=<?php echo $Livre->getCouverture();?>  /><br/>
                        <h5><?php echo '<strong>'."Code ISBN : ".'</strong>'. $Livre->getCodeISBN();?></h5>
                        <h5><?php echo '<strong>'."Genre : ".'</strong>'.$Livre->getGenre()->getNomGenre();?></h5>
                        <h5><?php echo '<strong>'."Date de Sortie : ".'</strong>'.Date::formaterDateFr($Livre->getDateSortie());?></h5>
                        <h5 class="text-justify"><?php echo '<strong>'."Résumé : ".'</strong><br/>'.$Livre->getResume();?></h5>
                    </div>

                    <div class="col-xs-6 col-sm-6"><br/><br/><br/><br/><br/>
                        <h5 align="vertical"><?php echo '<strong>'."Prix : ".'</strong>'.$Livre->getTarif().'€';?></h5>
                        <?php

                        if($Livre->getQuantiteStock() == 0){ ?>
                            <h5 class="text-danger"><?php echo '<strong>'.'Stock Epuisé'.'</strong>' ?></h5>
                        <?php } else { ?>
                            <h5><?php echo '<strong>'."Quantité en Stock : ".'</strong>'.$Livre->getQuantiteStock();?></h5>
                        <?php }
                        if(Main::SessionOuverte() == true)
                        { ?>
                        <a class="btn btn-primary" href='?uc=Panier&action=ajouterProduit&ref=<?php echo $Livre->getNumLivre();?>'>Ajouter au Panier</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="thumbnail">
            <div class="caption">
                <?php

                foreach ($TabCom->getCollection() as $Commentaire)
                {
                ?>
                <div class="thumbnail">
                    <div class="caption">
                        <h4><?php echo 'Posté par '.$Commentaire->getUser()->getPrenom();?>
                            <?php echo 'le '.Date::formaterFr($Commentaire->getDateCom());?></h4>
                        <h5><?php echo 'Contenu : ';?></h5>
                        <h5><?php echo $Commentaire->getCom();?><h5>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="thumbnail">
                    <div class="caption">
                        <?php
                        if(Main::SessionOuverte() == true)
                        {
                        ?>
                            <form method="post" action="?uc=Commentaire&action=ValiderCommentaire">
                                <h4>Ajouter un Commentaire !</h4>
                                <label name ="Com">Contenu du Commentaire</label></br>
                                <textarea name = "Contenu" rows="2" cols="50"></textarea></br>
                                <input class="btn btn-primary" type="submit" value="Ajouter un Commentaire"/>
                                </p>

                            </form>
                        <?php
                        }else{
                        ?>
                            Vous devez être connecté pour avoir accès à l'ajout de commentaire sur un Livre.
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
