<?php
/**
* Template Name: Nosotros
* 
*/
?>

<?php get_header(); 
$ID = get_the_ID();
$contenido = get_field('contenido');	
?>

<!-- Banner -->
<?php get_template_part('template-parts/banner') ?>
<!-- Banner -->

<div class="contenedor-general-nosotros">

    <div class="contenedor-nosotros">
        <div class="cont-col">
            <div class="img">
                <img src="<?php echo $contenido['imagen']; ?>" alt="">
            </div>
            <img class="dec" src="<?php echo get_template_directory_uri().'/img/t-p.png'; ?>" alt="">
        </div>
        <div class="cont-col">
            <div class="info">
                <?php echo $contenido['informacion']; ?>
            </div>
        </div>
    </div>

<!--
    <div class="contenedor-nosotros">
        <div class="cont-col">
            <div class="img">
                <img src="<?php echo get_template_directory_uri().'/img/t-f.png'; ?>" alt="">
            </div>
            <img class="dec" src="<?php echo get_template_directory_uri().'/img/t-p.png'; ?>" alt="">
        </div>
        <div class="cont-col">
            <div class="info">
                <h1>
                Por más de 10 años, 
                </h1>
                <p>
                Grupo Degasa ha logrado consolidarse como una empresa constructora capaz de cristalizar 
                proyectos al más alto nivel de calidad manteniendo los costos dentro de los 
                intereses de nuestros clientes y terminando en los tiempos compromiso.
                </p>
                <p>
                Mas de 30,000 m2 entregados en proyectos del ramo comercial, industrial y residencial 
                repartidos en distintos estados de la república respaldan nuestro constante compromiso 
                para seguir abriendo nuevos horizontes.
                </p>
                <p><strong>¿Cómo podemos ayudarte?</strong></p>
            </div>
        </div>
    </div>
-->

</div>

<!-- Contacto -->
<?php get_template_part('template-parts/contacto') ?>
<!-- Contacto -->

<?php get_footer(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>


<style>
.contenedor-general-banner .cont-info,
.contenedor-general-nosotros .contenedor-nosotros .cont-col,
.contact-container > div{
    opacity: 0;
}

</style>


<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.contenedor-general-banner .cont-info, .contenedor-general-nosotros .contenedor-nosotros .cont-col, .contact-container > div').waypoint(function() {
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