<?php
/**
 * Header template — matches old WordPress design
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$home = esc_url( home_url() );

$nav_links = array(
    array( 'href' => $home . '#inicio',     'label' => 'Inicio' ),
    array( 'href' => $home . '#mis-libros', 'label' => 'Libros' ),
    array( 'href' => $home . '#servicios',  'label' => 'Servicios' ),
    array( 'href' => $home . '/blog/',      'label' => 'Blog' ),
    array( 'href' => $home . '#sobre-mi',   'label' => 'Sobre mí' ),
    array( 'href' => $home . '#contacto',   'label' => 'Contacto' ),
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Navigation -->
    <header id="navbar" class="site-header">
        <div class="container">
            <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 0;">
                <!-- Logo -->
                <a href="<?php echo $home; ?>" style="text-decoration: none; display: block;">
                    <img src="<?php echo MIPO_URL; ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>" style="height: 60px; width: auto;">
                </a>

                <!-- Desktop Navigation -->
                <nav class="site-nav">
                    <ul>
                        <?php foreach ( $nav_links as $link ) : ?>
                            <li><a href="<?php echo esc_url( $link['href'] ); ?>" class="nav-link"><?php echo esc_html( $link['label'] ); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <!-- Mobile Hamburger -->
                <button id="hamburger" aria-label="Menu">
                    <span class="ham-line"></span>
                    <span class="ham-line"></span>
                    <span class="ham-line"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <nav id="mobile-menu">
                <ul>
                    <?php foreach ( $nav_links as $link ) : ?>
                        <li><a href="<?php echo esc_url( $link['href'] ); ?>"><?php echo esc_html( $link['label'] ); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>
