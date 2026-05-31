<?php
/**
 * Fallback template (shouldn't be used with proper setup)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<div class="container">
    <h1><?php esc_html_e( 'Default Index', 'mi-portfolio' ); ?></h1>
    <p><?php esc_html_e( 'This is the fallback template.', 'mi-portfolio' ); ?></p>
</div>

<?php
get_footer();
