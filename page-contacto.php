<?php
/**
* Template Name: Contacto
* 
*/
?>

<?php get_header(); 
$ID = get_the_ID();
?>

<div class="contenedor-general-contacto">

    <div class="cont-col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.721123298784!2d-100.33112508463938!3d25.68053771822203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295f3664925a3%3A0xa0434a2e39ecb5b3!2sManuel%20Mar%C3%ADa%20del%20Llano%201632%2C%20Centro%2C%2064000%20Monterrey%2C%20N.L.!5e0!3m2!1ses-419!2smx!4v1586192248394!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    </div>
    <div class="cont-col">
        <div class="contenedor-contacto">
            <!-- Contacto -->
                <?php get_template_part('template-parts/contacto') ?>
            <!-- Contacto -->
        </div>
    </div>

</div>


<?php get_footer(); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>


<style>
.contact-container > div{
    opacity: 0;
}

</style>


<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.contact-container > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    /*
    $j('.contenedor-general-servicios .contenedor-tabs-servicios').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '100%',
        triggerOnce: true
    });
    */

});
</script>