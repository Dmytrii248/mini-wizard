<?php
/**
 * Container
 *
 */
?>

<div class="container rounded box__container d-flex flex-column gap-4">
    <div class="row">
        <div class="col-12 p-0">
            <?php 
            get_template_part('mini-wizard/breadcrumbs');
            ?>
        </div>
    </div>
    <?php get_template_part('mini-wizard/content');?>
</div>