<?php
/**
 * Theme setup and WordPress integration
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Define theme constants
define( 'MIPO_VERSION', '1.0.0' );
define( 'MIPO_DIR', get_template_directory() );
define( 'MIPO_URL', get_template_directory_uri() );

/**
 * Theme setup on after_setup_theme
 */
function mipo_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ) );

    // Register nav menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'mi-portfolio' ),
        'footer'  => esc_html__( 'Footer Menu', 'mi-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'mipo_setup' );

/**
 * Enqueue scripts and styles
 */
function mipo_enqueue_scripts() {
    // Theme styles (already in style.css)
    wp_enqueue_style( 'mipo-style', get_stylesheet_uri(), array(), MIPO_VERSION );

    // Navigation JS
    wp_enqueue_script(
        'mipo-navigation',
        MIPO_URL . '/assets/js/navigation.js',
        array(),
        MIPO_VERSION,
        true
    );

    // Theme JS
    wp_enqueue_script(
        'mipo-theme',
        MIPO_URL . '/assets/js/theme.js',
        array(),
        MIPO_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'mipo_enqueue_scripts' );

/**
 * Include custom post types
 */
require_once MIPO_DIR . '/includes/post-types.php';

/**
 * Include ACF configuration
 */
require_once MIPO_DIR . '/includes/acf-config.php';

/**
 * Include custom filters
 */
require_once MIPO_DIR . '/includes/filters.php';
