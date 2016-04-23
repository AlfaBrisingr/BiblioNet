<?php
/**
 * Created by PhpStorm.
 * User: oceane
 * Date: 20/04/2016
 * Time: 16:42
 */
?>
<!-- Alerte valid -->
<div class="row row-centered">
    <div class="col-md-6 col-xs-12 col-centered">
        <?php
        if (array_key_exists('valid', $_SESSION)) {
            ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <?php echo $_SESSION['valid'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        if (array_key_exists('error', $_SESSION)) {
            ?>
            <div class="alert alert-dismissible alert-danger" role="alert">
                <span class="sr-only">Error:</span>
                <?php echo $_SESSION['error'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
        }
        if (array_key_exists('valid', $_SESSION)) {
            unset($_SESSION['valid']);
        }
        if (array_key_exists('error', $_SESSION)) {
            unset($_SESSION['error']);
        } ?>
</div>
</div>