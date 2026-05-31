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
            <div style="display: flex; align-items: center; justify-content: space-between; padding: 15px 0;">
                <!-- Logo/Brand -->
                <a href="<?php echo esc_url( home_url() ); ?>" class="site-logo" style="font-size: 1.25rem; font-weight: 700; color: var(--w-ivory);">
                    <?php bloginfo( 'name' ); ?>
                </a>

                <!-- Desktop Navigation -->
                <nav class="site-nav" style="display: none; gap: 30px; align-items: center;">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'fallback_cb'    => 'wp_page_menu',
                        'container'      => false,
                        'items_wrap'     => '<ul style="list-style: none; display: flex; gap: 30px; margin: 0;">%3$s</ul>',
                        'depth'          => 2,
                    ) );
                    ?>
                </nav>

                <!-- Mobile Hamburger -->
                <button id="hamburger" style="display: flex; gap: 8px; flex-direction: column;">
                    <span class="ham-line"></span>
                    <span class="ham-line"></span>
                    <span class="ham-line"></span>
                </button>
            </div>

            <!-- Mobile Menu -->
            <nav id="mobile-menu" style="overflow: hidden; max-height: 0; opacity: 0; transition: max-height 0.3s ease, opacity 0.3s ease;">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'fallback_cb'    => 'wp_page_menu',
                    'container'      => false,
                    'items_wrap'     => '<ul style="list-style: none; padding: 20px 0; margin: 0;">%3$s</ul>',
                    'depth'          => 2,
                ) );
                ?>
            </nav>
        </div>
    </header>
