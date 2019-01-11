<?php
/**
* @package hitchcockChild
*/
//

function hitchcockChild() {
    wp_enqueue_style( 'bootstrap-CSS', '/node_modules/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'hitchcockChild', get_stylesheet_uri()); //pas besoin de precicer le nom du css ca y va directement //
    wp_enqueue_script( 'jquery', '/node_modules/jquery/dist/jquery.min.js', array(), '20151215', true  ) ;
    wp_enqueue_script( 'bootstrap-JS', '/node_modules/bootstrap/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'hitchcockChild-JS', '/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'hitchcockChild' );

function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
