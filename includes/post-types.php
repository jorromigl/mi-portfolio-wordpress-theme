<?php
/**
 * Register Custom Post Types: Obra (Books) and Servicio (Services)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register 'Obra' (Book) Custom Post Type
 */
function mipo_register_obra_cpt() {
    $args = array(
        'label'               => esc_html__( 'Mis libros', 'mi-portfolio' ),
        'singular_name'       => esc_html__( 'Obra', 'mi-portfolio' ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'rewrite'             => array( 'slug' => 'mis-libros' ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'           => 'dashicons-book',
        'show_in_rest'        => true,
    );
    register_post_type( 'obra', $args );
}
add_action( 'init', 'mipo_register_obra_cpt' );

/**
 * Register 'Servicio' (Service) Custom Post Type
 */
function mipo_register_servicio_cpt() {
    $args = array(
        'label'               => esc_html__( 'Servicios', 'mi-portfolio' ),
        'singular_name'       => esc_html__( 'Servicio', 'mi-portfolio' ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => false,
        'has_archive'         => false,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'rewrite'             => array( 'slug' => 'servicio' ),
        'supports'            => array( 'title', 'editor' ),
        'menu_icon'           => 'dashicons-hammer',
        'show_in_rest'        => true,
    );
    register_post_type( 'servicio', $args );
}
add_action( 'init', 'mipo_register_servicio_cpt' );

/**
 * Flush rewrite rules on theme activation
 */
function mipo_flush_rewrites() {
    mipo_register_obra_cpt();
    mipo_register_servicio_cpt();
    flush_rewrite_rules();
}
register_activation_hook( MIPO_DIR . '/functions.php', 'mipo_flush_rewrites' );
