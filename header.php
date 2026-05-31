<?php
/**
 * Header template — matches Astro portfolio navbar
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$home = esc_url( home_url() );

// Navigation links — same as Astro portfolio
$nav_links = array(
    array( 'href' => $home . '#inicio',     'label' => 'Inicio' ),
    array( 'href' => $home . '#mis-libros', 'label' => 'Mis libros' ),
    array( 'href' => $home . '#sobre-mi',   'label' => 'Sobre mí' ),
    array( 'href' => $home . '#servicios',  'label' => 'Servicios' ),
    array( 'href' => $home . '#contacto',   'label' => 'Contacto' ),
);

$blog_link = $home . '/blog/';
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
            <div style="display: flex; align-items: center; justify-content: space-between; padding: 16px 0;">
                <!-- Logo/Brand -->
                <a href="<?php echo $home; ?>" style="text-decoration: none;">
                    <?php
                    $name = get_bloginfo('name');
                    $parts = explode(' ', $name);
                    ?>
                    <span class="gradient-text-w" style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 700;"><?php echo esc_html( $parts[0] ); ?></span>
                    <?php if ( count($parts) > 1 ) : ?>
                        <span style="color: var(--w-ivory-dim); font-family: var(--font-display); font-size: 1.25rem; font-weight: 700;"><?php echo esc_html( ' ' . implode(' ', array_slice($parts, 1)) ); ?></span>
                    <?php endif; ?>
                    <span style="display: block; font-size: 10px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: var(--w-muted); font-family: var(--font-lora); margin-top: 2px;">
                        Lectora · Escritora · Correctora
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="site-nav">
                    <ul>
                        <?php foreach ( $nav_links as $link ) : ?>
                            <li><a href="<?php echo esc_url( $link['href'] ); ?>" class="nav-link"><?php echo esc_html( $link['label'] ); ?></a></li>
                        <?php endforeach; ?>
                        <li><a href="<?php echo esc_url( $blog_link ); ?>" style="color: var(--w-burgundy-l); font-weight: 600;">Blog</a></li>
                    </ul>
                </nav>

                <!-- CTA Desktop -->
                <div class="nav-cta">
                    <a href="<?php echo $home; ?>#contacto" class="w-btn" style="padding: 10px 24px; font-size: 0.8rem;"><span>Contactar</span></a>
                </div>

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
                    <li><a href="<?php echo esc_url( $blog_link ); ?>" style="color: var(--w-burgundy-l); font-weight: 600;">Blog</a></li>
                    <li style="padding-top: 12px;">
                        <a href="<?php echo $home; ?>#contacto" class="w-btn" style="width: 100%; justify-content: center; font-size: 0.85rem;"><span>Contactar</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
