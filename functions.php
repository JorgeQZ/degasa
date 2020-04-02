<?php
if ( ! isset ( $content_width) )
$content_width = 800;

if ( ! function_exists( 'degasa_setup' ) ) :
    function degasa_setup() {
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );

    }
endif;
add_action( 'after_setup_theme', 'degasa_setup' );

function register_degasa_menus(){

    register_nav_menus( array(
        'Header'   => __( 'Header Menu', 'Degasa' ),
        'Footer' => __( 'Footer Menu', 'Degasa' )
    ) );
}

add_action('init', 'register_degasa_menus');

function degasa_setup_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    }
add_action( 'after_setup_theme', 'degasa_setup_custom_logo_setup' );

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style( 'generals', get_template_directory_uri() . '/css/generals.css', array(), filemtime( get_stylesheet_directory() . '/css/generals.css' ), 'all');

    wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
    wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', true);

    if(is_page_template('page-servicios.php')){
        wp_enqueue_style( 'servicios', get_template_directory_uri() . '/css/servicios.css', array(), filemtime( get_stylesheet_directory() . '/css/servicios.css' ), 'all');
    }

    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
