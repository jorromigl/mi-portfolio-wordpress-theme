<?php
/**
 * Footer template
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container" style="padding: 60px 0;">
            <div class="grid grid-3" style="margin-bottom: 40px;">
                <!-- Brand -->
                <div>
                    <h3><?php bloginfo( 'name' ); ?></h3>
                    <p style="color: var(--w-ivory-dim);">
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h4><?php esc_html_e( 'Enlaces', 'mi-portfolio' ); ?></h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Inicio', 'mi-portfolio' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'mi-portfolio' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/mis-libros' ) ); ?>"><?php esc_html_e( 'Mis libros', 'mi-portfolio' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contacto' ) ); ?>"><?php esc_html_e( 'Contacto', 'mi-portfolio' ); ?></a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4><?php esc_html_e( 'Legal', 'mi-portfolio' ); ?></h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url( home_url( '/aviso-legal' ) ); ?>"><?php esc_html_e( 'Aviso Legal', 'mi-portfolio' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacidad' ) ); ?>"><?php esc_html_e( 'Privacidad', 'mi-portfolio' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/cookies' ) ); ?>"><?php esc_html_e( 'Cookies', 'mi-portfolio' ); ?></a></li>
                    </ul>
                </div>
            </div>

            <div style="border-top: 1px solid var(--w-border); padding-top: 30px; text-align: center; color: var(--w-ivory-dim); font-size: 0.875rem;">
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Todos los derechos reservados.', 'mi-portfolio' ); ?></p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
