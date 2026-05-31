<?php
/**
 * Custom filters and hooks
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add custom body classes
 */
function mipo_body_classes( $classes ) {
    if ( is_home() || is_archive() ) {
        $classes[] = 'is-blog';
    }
    if ( is_singular( 'obra' ) ) {
        $classes[] = 'is-obra';
    }
    return $classes;
}
add_filter( 'body_class', 'mipo_body_classes' );

/**
 * Modify excerpt length
 */
function mipo_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mipo_excerpt_length' );

/**
 * Modify excerpt more
 */
function mipo_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'mipo_excerpt_more' );

/**
 * Remove WordPress emoji
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Remove WordPress version from header
 */
function mipo_remove_version() {
    return '';
}
add_filter( 'the_generator', 'mipo_remove_version' );
