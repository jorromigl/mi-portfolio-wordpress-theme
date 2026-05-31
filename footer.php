<?php
/**
 * Footer template
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$home = esc_url( home_url() );
?>

    <!-- Ornament before footer -->
    <div class="ornament" style="padding: 0 2rem;">✦</div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container" style="padding: 60px 0;">
            <div class="grid grid-3" style="margin-bottom: 40px;">
                <!-- Brand -->
                <div>
                    <h3 style="font-family: var(--font-display);"><?php bloginfo( 'name' ); ?></h3>
                    <p style="color: var(--w-ivory-dim); font-size: 0.9rem;">
                        <?php bloginfo( 'description' ); ?>
                    </p>
                </div>

                <!-- Links -->
                <div>
                    <h4>Enlaces</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo $home; ?>#inicio">Inicio</a></li>
                        <li><a href="<?php echo $home; ?>#mis-libros">Mis libros</a></li>
                        <li><a href="<?php echo $home; ?>#sobre-mi">Sobre mí</a></li>
                        <li><a href="<?php echo $home; ?>#servicios">Servicios</a></li>
                        <li><a href="<?php echo $home; ?>#contacto">Contacto</a></li>
                        <li><a href="<?php echo $home; ?>/blog/" style="color: var(--w-burgundy-l);">Blog</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h4>Legal</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="<?php echo esc_url( home_url( '/aviso-legal/' ) ); ?>">Aviso Legal</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacidad/' ) ); ?>">Privacidad</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/cookies/' ) ); ?>">Cookies</a></li>
                    </ul>
                </div>
            </div>

            <div style="border-top: 1px solid var(--w-border); padding-top: 30px; text-align: center; color: var(--w-muted); font-size: 0.8rem;">
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
