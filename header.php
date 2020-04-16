<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="brand-logo">
            <?php the_custom_logo() ?>
        </div>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'Header',
                'container_class' => 'main-menu'
            )
        );
        ?>

        <?php  if ( is_active_sidebar( 'header-right' ) ) : ?>
        <div id='header-right' class="social-links" role="complementary">
            <?php dynamic_sidebar( 'header-right'); ?>
        </div>
        <?php endif; ?>
        <!-- <div class="social-links">
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-facebook.png'?>" alt="" class="social-icon"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-twitter.png'?>" alt="" class="social-icon"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/icon-email.png'?>" alt="" class="social-icon"></a>
        </div> -->
        <div class="menu-button">
            <span></span>
            <span></span>
        </div>
    </header>
