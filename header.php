<?php
/**
 * Header template
 */

if ( ! defined( 'ABSPATH' ) ) exit;
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
                <a href="<?php echo esc_url( home_url() ); ?>" style="text-decoration: none;">
                    <span class="gradient-text-w" style="font-family: var(--font-display); font-size: 1.25rem; font-weight: 700;"><?php
                        $name = get_bloginfo('name');
                        $parts = explode(' ', $name);
                        echo esc_html( $parts[0] );
                    ?></span>
                    <?php if ( count($parts) > 1 ) : ?>
                        <span style="color: var(--w-ivory-dim); font-family: var(--font-display); font-size: 1.25rem; font-weight: 700;"><?php echo esc_html( ' ' . implode(' ', array_slice($parts, 1)) ); ?></span>
                    <?php endif; ?>
                    <span style="display: block; font-size: 10px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: var(--w-muted); font-family: var(--font-lora); margin-top: 2px;">
                        Lectora · Escritora · Correctora
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <nav class="site-nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'fallback_cb'    => false,
                        'container'      => false,
                        'depth'          => 1,
                    ) );
                    ?>
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
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'fallback_cb'    => false,
                    'container'      => false,
                    'depth'          => 1,
                ) );
                ?>
            </nav>
        </div>
    </header>
