<?php

function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

//Crear Menús
function register_my_menus() {
register_nav_menus(
    array(
    'principal'=> 'Menú Principal',
    'secundario'=> 'Menú Secundario'
    ));
  }
add_action( 'init', 'register_my_menus' );

//Crea clase para <a> en Menú Principal
add_filter('nav_menu_link_attributes', 'menu_principal', 10, 3);
function menu_principal ($atts, $item, $args){

    if( $args->theme_location == 'principal' ) {
    $class = 'nav-link text-dark font-weight-bold';
    $atts['class'] = $class;
    }
    
    return $atts;
}

//Crea clase para <a> en Menú Secundario
add_filter('nav_menu_link_attributes', 'menu_secundario', 10, 3);
function menu_secundario ($atts, $item, $args){

    if( $args->theme_location == 'secundario' ) {
    $class = 'nav-link text-light blackText';
    $atts['class'] = $class;
    }
    
    return $atts;
}

?>