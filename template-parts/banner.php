<?php $img_featured = get_the_post_thumbnail_url();?>
<?php $post_type = get_post_type(); ?>

<div class="contenedor-general-banner" style="background-image: url(<?php echo $img_featured; ?>">


    <div class="cont-info">
        <?php the_field("informacion"); ?>
    </div>

<!--
    <div class="cont-info">
        <p>
            <strong>
            "La Ingeniería no se trata de soluciones perfectas,
            </strong>
        </p>
        <h2>
        si no de hacer lo mejor posible
        con recursos limitados. "
        </h2>
        <h3>
        - Randy Pausch
        </h3>
    </div>
-->

<!--
    <div class="cont-info">
        <h1>
        expertos 
        </h1>
        <h1>
            <strong>
            en construcción
            </strong>
        </h1>
    </div>
-->

</div>
