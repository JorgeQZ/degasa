<?php
/**
* Template Name: Servicios
* 
*/
?>

<?php get_header(); 
$ID = get_the_ID();
?>

<!-- Banner -->
<?php get_template_part('template-parts/banner') ?>
<!-- Banner -->

<div class="contenedor-general-servicios">

    <?php if( have_rows('servicios', $ID) ): 
    $i = 1;    
    ?>

    <?php while( have_rows('servicios', $ID) ): the_row(); 
        $seccion_1 = get_sub_field('seccion_1');	
        $seccion_2 = get_sub_field('seccion_2');	
    ?>

    <div class="contenedor-general-servicio active">

        <div class="contenedor-seccion1">
                <div class="cont-col">
                    <div class="info">
                        <img src="<?php echo $seccion_1['logo']; ?>" alt="">
                        <p class="desc">
                            <?php echo $seccion_1['descripcion']; ?>
                        </p>
                    </div>
                    <div class="mask">
                        <div class="maski" style="background-image: url(<?php echo $seccion_1['fondo']; ?>);">
                            
                        </div>
                    </div>
                </div>
                
                <div class="cont-col" style="background-image: url(<?php echo $seccion_1['imagen']; ?>);">
                </div>

        </div>

        <div class="contenedor-seccion2" style="background-image: url(<?php echo $seccion_2['fondo']; ?>);">
            <div class="cont-seccion2">
                <div class="cont-col">
                    <div class="img">
                        <img src="<?php echo $seccion_2['imagen']; ?>" alt="">
                    </div>
                </div>
                <div class="cont-col">
                    <div class="info">
                        <?php echo $seccion_2['informacion']; ?>
                        <!--

                        <p><strong style="font-size: 32px;">Contamos con <br> un catálogo de proyectos </strong></p>

                        <p>
                                que son desarrollados y comercializados directamente 
                                por nuestra empresa bajo los estándares más altos en calidad 
                                y diseño logrando ofrecer la mayor rentabilidad a tu inversión.
                        </p>

                        <div class="dec"></div>

                        <p><strong>¿Cómo podemos ayudarte?</strong></p>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>


        <?php
        $i++; 
        endwhile; ?>
        <?php endif; ?>


<!--

    <div class="contenedor-general-servicio active">
    
        <div class="contenedor-seccion1">
            <div class="cont-col">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri().'/img/logo-serv-constr.png'; ?>" alt="">
                    <p class="desc">
                        Nuestra empresa se integra por un grupo interdisciplinario de profesionistas 
                        que combinan la experiencia y la juventud para poder atender tus proyectos 
                        en un abanico de posibilidades dentro de la construcción.
                    </p>
                </div>
                <div class="mask">
                    <div class="maski" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-constr.jpg'; ?>);"></div>
                </div>
            </div>
            
            <div class="cont-col" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-constr2.jpg'; ?>);">

            </div>
        </div>            
        
        <div class="contenedor-seccion2" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-constr-fondo.jpg'; ?>);">
            <div class="cont-seccion2">
                <div class="cont-col">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/serv-constr3.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-col">
                    <div class="info">

                        <p><strong>Entre los que destacan:</strong></p>

                        <ul>
                            <li>Oficinas Corporativas</li>
                            <li>Centro y locales comerciales</li>
                            <li>Instituciones Bancarias</li>
                            <li>Restaurantes</li>
                            <li>Hoteles y hospitales</li>
                            <li>Usos Mixtos</li>
                            <li>Residenciales</li>
                            <li>Proyectos Llave en Mano</li>
                            <li>Proyectos Fast Track</li>
                            <li>Servicios de Mantenimiento en general</li>
                        </ul>

                        <div class="dec"></div>

                        <p><strong>¿Cómo podemos ayudarte?</strong></p>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="contenedor-general-servicio">
    
        <div class="contenedor-seccion1">
            <div class="cont-col">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri().'/img/logo-servicios.png'; ?>" alt="">
                    <p class="desc">
                    Entendemos que invertir en bienes raíces requiere 
                    de un gran esfuerzo y sacrificio, es por esto 
                    que en DEGASA Desarrollos contamos con proyectos 
                    que son pensados en lograr la mayor rentabilidad a tu inversión bajo los estándares mas altos en calidad y diseño.
                    </p>
                </div>
                <div class="mask">
                    <div class="maski" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicios.jpg'; ?>);">
                        
                    </div>
                </div>
            </div>
            
            <div class="cont-col" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicios2.jpg'; ?>);">

            </div>
        </div>

        <div class="contenedor-seccion2" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicios-fondo.jpg'; ?>);">
            <div class="cont-seccion2">
                <div class="cont-col">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/servicios3.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-col">
                    <div class="info">

                        <p><strong style="font-size: 32px;">Contamos con <br> un catálogo de proyectos </strong></p>

                        <p>
                            que son desarrollados y comercializados directamente 
                            por nuestra empresa bajo los estándares más altos en calidad 
                            y diseño logrando ofrecer la mayor rentabilidad a tu inversión.
                        </p>

                        <div class="dec"></div>

                        <p><strong>¿Cómo podemos ayudarte?</strong></p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="contenedor-general-servicio">
    
        <div class="contenedor-seccion1">
            <div class="cont-col">
                <div class="info">
                    <img src="<?php echo get_template_directory_uri().'/img/logo-serv-proh.png'; ?>" alt="">
                    <p class="desc">
                        En Pro H nos encargamos de ofrecer asesoría y soluciones constructivas para muros, cielos y fachadas.
                    </p>
                </div>
                <div class="mask">
                    <div class="maski" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-proh.jpg'; ?>);"></div>
                </div>
            </div>
            
            <div class="cont-col" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-proh2.jpg'; ?>);">

            </div>
        </div>

        <div class="contenedor-seccion2" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-proh-fondo.jpg'; ?>);">
            <div class="cont-seccion2">
                <div class="cont-col">
                    <div class="img">
                        <img src="<?php echo get_template_directory_uri().'/img/serv-proh3.jpg'; ?>" alt="">
                    </div>
                </div>
                <div class="cont-col">
                    <div class="info">

                        <p><strong> Mediante la comercialización </strong></p>

                        <p>
                            de paneles prefabricados ligeros de la marca Panel Rey®
                            al mejor precio del mercado y asegurando óptimos tiempos de entrega.
                        </p>

                        <div class="dec"></div>

                        <p><strong>¿Cómo podemos ayudarte?</strong></p>

                    </div>
                </div>
            </div>
        </div>

    </div>

-->

    <div class="contenedor-tabs-servicios">
    <?php if( have_rows('servicios', $ID) ): ?>

    <?php while( have_rows('servicios', $ID) ): the_row(); 
        $tab = get_sub_field('tab');	
    ?>

    <div class="cont-tab active <?php echo $tab['estilo_fondo']; ?>">
        <img src="<?php echo $tab['logo']; ?>" alt="">
        <div class="mask" style="background-image: url(<?php echo $tab['fondo']; ?>);"></div>
    </div>

    <?php
    endwhile; ?>
    <?php endif; ?>
        <!--
        <div class="cont-tab active">
            <img src="<?php echo get_template_directory_uri().'/img/logo-serv-constr-tab.png'; ?>" alt="">
            <div class="mask" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-constr.jpg'; ?>);"></div>
        </div>
        <div class="cont-tab">
            <img src="<?php echo get_template_directory_uri().'/img/logo-servicios.png'; ?>" alt="">
            <div class="mask" style="background-image: url(<?php echo get_template_directory_uri().'/img/servicios.jpg'; ?>);"></div>
        </div>
        <div class="cont-tab">
            <img src="<?php echo get_template_directory_uri().'/img/logo-serv-proh.png'; ?>" alt="">
            <div class="mask" style="background-image: url(<?php echo get_template_directory_uri().'/img/serv-proh.jpg'; ?>);"></div>
        </div>
        -->
    </div>


</div>

<!-- Contacto -->
<?php get_template_part('template-parts/contacto') ?>
<!-- Contacto -->

<?php get_footer(); ?>


<script>
$(document).ready(function(){
    $(".contenedor-general-servicios .contenedor-tabs-servicios .cont-tab").each(function(index){
        $(this).click(function(){
            $(".contenedor-general-servicios .contenedor-tabs-servicios .cont-tab").removeClass("active");
            $(this).addClass("active");
            $(".contenedor-general-servicios .contenedor-general-servicio").removeClass("active");
            $(".contenedor-general-servicios .contenedor-general-servicio").eq(index).addClass("active");
        });
    });


    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };
    var serv = getUrlParameter('servicio');

    if(serv){
        $(".contenedor-general-servicios .contenedor-tabs-servicios .cont-tab").each(function(index){
            if(index == serv)
            {
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
        $(".contenedor-general-servicios .contenedor-general-servicio").each(function(index){
            if(index == serv)
            {
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
    }
    else{
        $(".contenedor-general-servicios .contenedor-tabs-servicios .cont-tab").each(function(index){
            if(index == 0)
            {
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
        $(".contenedor-general-servicios .contenedor-general-servicio").each(function(index){
            if(index == 0)
            {
                $(this).addClass("active");
            }
            else{
                $(this).removeClass("active");
            }
        });
    }

    
});

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>


<style>
.contenedor-general-banner .cont-info,
.contenedor-general-servicios .contenedor-tabs-servicios,
.contenedor-general-servicios .contenedor-general-servicio .contenedor-seccion1 .cont-col .info,
.contenedor-general-servicios .contenedor-general-servicio:nth-child(1) .contenedor-seccion2 .cont-seccion2 .cont-col .img,
.contenedor-general-servicios .contenedor-general-servicio .contenedor-seccion2 .cont-seccion2 .cont-col .info,
.contact-container > div{
    opacity: 0;
}

</style>


<script>
var $j = jQuery.noConflict();

jQuery(function($j) {

    $j('.contenedor-general-banner .cont-info, .contenedor-general-servicios .contenedor-general-servicio .contenedor-seccion1 .cont-col .info, .contenedor-general-servicios .contenedor-general-servicio:nth-child(1) .contenedor-seccion2 .cont-seccion2 .cont-col .img, .contenedor-general-servicios .contenedor-general-servicio .contenedor-seccion2 .cont-seccion2 .cont-col .info, .contact-container > div').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '75%',
        triggerOnce: true
    });

    
    $j('.contenedor-general-servicios .contenedor-tabs-servicios').waypoint(function() {
        $j(this).toggleClass('fadeIn animated');
    }, {
        offset: '100%',
        triggerOnce: true
    });
    

});
</script>