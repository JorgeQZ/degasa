<?php
/* Template Name: Front Page */
get_header();?>
<div class="owl-carousel owl-theme home-hero-slider">
    <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/home-slide.jpg';?>)">
        <div class="content">
            <div>
                CALIDAD Y SEGURIDAD
                <br>
                <div class="bg-text">A TU INVERSION</div>
            </div>
        </div>
    </div>
    <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/home-slide.jpg';?>)">
        <div class="content">
            <div>
                CALIDAD Y SEGURIDAD <br>
                <div class="bg-text">A TU INVERSION</div>
            </div>
        </div>
    </div>
</div>

<div class="about-container">
    <div class="content">
        <div class="title" data-text="CALIDAD Y SEGURIDAD">
            CALIDAD Y SEGURIDAD
        </div>
        <div class="text">
            Por más de 10 años, Grupo Degasa ha logrado consolidarse como una empresa constructora capaz de cristalizar proyectos al más alto nivel de calidad manteniendo los costos dentro de los intereses de nuestros clientes y terminando en los tiempos compromiso.
        </div>
        <a href="#">
            <div class="vermas">
                <span>ver más<span>
            </div>
        </a>
    </div>
</div>

<div class="grid-container">
    <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/const.jpg'; ?>)">
        <div class="overlay"></div>
        <div class="content">
            <img class="logo" src="<?php echo get_template_directory_uri().'/img/logo-const.png'; ?>" alt="DEGASA Construcción">
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus tenetur earum! Harum aliquid temporibus libero ipsa explicabo dolorum culpa ipsam, velit molestiae odio voluptatibus placeat, eaque suscipit omnis ducimus.</div>
        </div>

        <div class="vermas">Ver más >></div>
    </div>
    <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/desarrollo.jpg'; ?>)">
        <div class="overlay"></div>
        <div class="content">
            <img class="logo" src="<?php echo get_template_directory_uri().'/img/logo-des.png'; ?>" alt="DEGASA Desarrollo">
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus tenetur earum! Harum aliquid temporibus libero ipsa explicabo dolorum culpa ipsam, velit molestiae odio voluptatibus placeat, eaque suscipit omnis ducimus.</div>
        </div>
        <div class="vermas">Ver más >></div>

    </div>
    <div class="item" style="background-image: url(<?php echo get_template_directory_uri().'/img/prefabricados.jpg'; ?>)">
        <div class="overlay"></div>
        <div class="content">
            <img class="logo" src="<?php echo get_template_directory_uri().'/img/logo-proh.png'; ?>" alt="Prefabricados Ligeros">
            <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic natus tenetur earum! Harum aliquid temporibus libero ipsa explicabo dolorum culpa ipsam, velit molestiae odio voluptatibus placeat, eaque suscipit omnis ducimus.</div>
        </div>
        <div class="vermas">Ver más >></div>

    </div>
</div>

<div class="clients-container">
    <div class="title-container">
        <div class="title" data-text="CLIENTES">CLIENTES</div>
    </div>
</div>
<?php get_footer();?>
