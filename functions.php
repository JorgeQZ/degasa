<?php

include "widgets/icons-social-media-header.php";

include "widgets/icons-social-media.php";

if ( ! isset ( $content_width) )
$content_width = 800;

if ( ! function_exists( 'degasa_setup' ) ) :
    function degasa_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'custom-header' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support('editor-styles');
    }
endif;
add_action( 'after_setup_theme', 'degasa_setup' );

function css_admin_widget(){
    wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/admin_css.css', array(), filemtime( get_stylesheet_directory() . '/css/admin_css.css' ), 'all');
}
add_action('admin_enqueue_scripts', 'css_admin_widget');

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
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), filemtime( get_stylesheet_directory() . '/css/animate.css' ), 'all');

    wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');

    wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/js/owl.carousel.min.js', array('jquery'),'1.1', false);

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js', array('jquery'),filemtime( get_stylesheet_directory() . '/js/custom.js' ), false);

    wp_enqueue_script('query_', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array('jquery'), null , false);

    wp_enqueue_script('waypoint', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js', array('jquery'), null , false);


    if(is_page_template('page-servicios.php')){
        wp_enqueue_style( 'servicios', get_template_directory_uri() . '/css/servicios.css', array(), filemtime( get_stylesheet_directory() . '/css/servicios.css' ), 'all');
    }

    if(is_page_template('page-nosotros.php')){
        wp_enqueue_style( 'nosotros', get_template_directory_uri() . '/css/nosotros.css', array(), filemtime( get_stylesheet_directory() . '/css/nosotros.css' ), 'all');
    }

    if(is_page_template('page-contacto.php')){
        wp_enqueue_style( 'contacto', get_template_directory_uri() . '/css/contacto.css', array(), filemtime( get_stylesheet_directory() . '/css/contacto.css' ), 'all');
    }

    if(is_page_template('front-page.php')):
        wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/front-page.css', array(), filemtime( get_stylesheet_directory() . '/css/front-page.css' ), 'all');
    endif;
    if ( is_user_logged_in() ) {
        wp_enqueue_style( 'logged_css', get_template_directory_uri() . '/css/logged_css.css', array(), filemtime( get_stylesheet_directory() . '/css/logged_css.css' ), 'all');
    }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function wpb_widgets_init() {

    register_sidebar( array(
        'name' =>__( 'Header Right', 'wpb'),
        'id' => 'header-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Columna 1', 'wpb' ),
        'id' => 'fcolumn-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 2', 'wpb'),
        'id' => 'fcolumn-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 3', 'wpb'),
        'id' => 'fcolumn-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' =>__( 'Footer Columna 4', 'wpb'),
        'id' => 'fcolumn-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    register_sidebar( array(
        'name' =>__( 'Footer Columna 5', 'wpb'),
        'id' => 'fcolumn-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );



}
add_action( 'widgets_init', 'wpb_widgets_init' );
