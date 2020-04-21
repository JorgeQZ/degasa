<?php
/* Template Name: Front Page */
get_header();?>
<div class="cont">
    <?php
    echo do_shortcode(get_field('slider'));
    ?>
</div>
<?php $bloque_1 = get_field('bloque_1'); ?>
<div class="about-container">
    <div class="content">
        <div class="title" data-text="<?php echo $bloque_1['titulo']?>">
            <?php echo $bloque_1['titulo']?>
        </div>
        <div class="text">
            <?php echo $bloque_1['texto']?>
        </div>
        <a href="<?php echo $bloque_1['link']?>">
            <div class="vermas">
                <span>ver más<span>
            </div>
        </a>
    </div>
</div>


<?php $bloque_2 = get_field('bloque_2'); ?>
<div class="grid-container">
    <div class="item" style="background-image: url(<?php echo $bloque_2['content']['background']['Imagen']?>)">
        <div class="overlay" style="background-color: <?php echo $bloque_2['content']['background']['overlay']?>"></div>
        <div class="content">
            <div class="img-logo">
                <img class="logo" src="<?php echo $bloque_2['content']['logos']['logo_original']?>" alt="DEGASA Construcción">
                <img class="logo-hover" src="<?php echo $bloque_2['content']['logos']['logo_en_blanco']?>" alt="DEGASA Construcción">
            </div>
            <div class="text">
                <?php echo $bloque_2['content']['texto']?>
            </div>
        </div>
        <a href=" <?php echo $bloque_2['content']['link']?>">
            <div class="vermas">Ver más >></div>
        </a>
    </div>
    <div class="item" style="background-image: url(<?php echo $bloque_2['content_2']['background']['Imagen']?>)">
        <div class="overlay" style="background-color: <?php echo $bloque_2['content_2']['background']['overlay']?>"></div>
        <div class="content">
            <div class="img-logo">
                <img class="logo" src="<?php echo $bloque_2['content_2']['logos']['logo_original']?>" alt="DEGASA Construcción">
                <img class="logo-hover" src="<?php echo $bloque_2['content_2']['logos']['logo_en_blanco']?>" alt="DEGASA Construcción">
            </div>
            <div class="text">
                <?php echo $bloque_2['content_2']['texto']?>
            </div>
        </div>
        <a href=" <?php echo $bloque_2['content_2']['link']?>">
            <div class="vermas">Ver más >></div>
        </a>
    </div>
    <div class="item" style="background-image: url(<?php echo $bloque_2['content_3']['background']['Imagen']?>)">
        <div class="overlay" style="background-color: <?php echo $bloque_2['content_3']['background']['overlay']?>"></div>
        <div class="content">
            <div class="img-logo">
                <img class="logo" src="<?php echo $bloque_2['content_3']['logos']['logo_original']?>" alt="DEGASA Construcción">
                <img class="logo-hover" src="<?php echo $bloque_2['content_3']['logos']['logo_en_blanco']?>" alt="DEGASA Construcción">
            </div>
            <div class="text">
                <?php echo $bloque_2['content_3']['texto']?>
            </div>
        </div>
        <a href=" <?php echo $bloque_2['content_3']['link']?>">
            <div class="vermas">Ver más >></div>
        </a>
    </div>
</div>

<?php $bloque_3 = get_field('bloque_3'); ?>
<div class="clients-container">
    <div class="title-container">
        <div class="title" data-text="CLIENTES">CLIENTES</div>
    </div>

    <div class="grid-items">
        <?php foreach ($bloque_3 as $logo) : ?>
        <div class="items"><img src="<?php echo $logo['logo_cliente']?>" alt=""></div>
        <?php endforeach; ?>
    </div>
</div>


<div class="projects-container">
    <div class="title">
        Conozca obras en todo México<br>
        <strong>en donde Grupo Degasa ha participado</strong>
    </div>

    <?php get_template_part('template-parts/grid-slides') ?>

    <div class="file-text">
        <img src="<?php echo get_template_directory_uri().'/img/icon-pdf.png'?>" alt="">
        <div class="text">
            DESCARGA NUESTRO CATÁLOGO DE OBRAS <br>
            <a download="Catálogo" href="<?php echo get_field('archivo_de_catalogo') ?>"><strong>COMPLETO AQUÍ</strong></a>
        </div>
    </div>
</div>

<!-- Contacto -->
<?php get_template_part('template-parts/contacto') ?>
<!-- Contacto -->

<?php get_footer();?>


<style>
.home-hero-slider .item>.content,
.grid-container .item .content,
.clients-container>div,
.projects-container>div,
.contact-container>div,
.about-container .content {
    opacity: 0;
}

</style>


<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.home-hero-slider .item > .content, .grid-container .item .content, .clients-container > div, .projects-container > div, .contact-container > div, .about-container .content').
    waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    /*
    $j('.hero-banner .hero-title').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '100%',
        triggerOnce: true
    });
    */

});
</script>
