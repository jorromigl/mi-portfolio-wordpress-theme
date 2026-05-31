<?php
/**
 * Homepage template
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main>
    <!-- Hero Section -->
    <section id="inicio" class="hero" style="padding: 120px 0 80px; text-align: center;">
        <div class="container">
            <h1 class="gradient-text-w" style="font-size: 3.5rem; margin-bottom: 20px;">
                <?php echo get_field( 'hero_titulo', 'option' ) ?: 'Portfolio'; ?>
            </h1>
            <p style="font-size: 1.25rem; color: var(--w-ivory-dim); margin-bottom: 40px;">
                <?php echo get_field( 'hero_subtitulo', 'option' ) ?: ''; ?>
            </p>
        </div>
    </section>

    <!-- Sobre Mí Section -->
    <section id="sobre-mi" style="padding: 80px 0; background: var(--w-bg2);">
        <div class="container">
            <h2><?php echo get_field( 'sobre_mi_titulo', 'option' ) ?: esc_html__( 'Sobre Mí', 'mi-portfolio' ); ?></h2>
            <div style="max-width: 800px; margin-top: 30px;">
                <?php echo wpautop( get_field( 'sobre_mi_texto', 'option' ) ); ?>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" style="padding: 80px 0;">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">
                <?php esc_html_e( 'Servicios', 'mi-portfolio' ); ?>
            </h2>
            <div class="grid grid-3">
                <?php
                $servicios = new WP_Query( array(
                    'post_type'      => 'servicio',
                    'posts_per_page' => -1,
                    'meta_key'       => 'servicio_orden',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'ASC',
                ) );

                if ( $servicios->have_posts() ) :
                    while ( $servicios->have_posts() ) : $servicios->the_post();
                        $nombre = get_field( 'servicio_nombre' );
                        $descripcion = get_field( 'servicio_descripcion' );
                        $icono = get_field( 'servicio_icono' );
                        $cta_texto = get_field( 'servicio_cta_texto' );
                        $cta_enlace = get_field( 'servicio_cta_enlace' );
                        ?>
                        <div class="card">
                            <?php if ( $icono ) : ?>
                                <div style="margin-bottom: 20px;">
                                    <?php echo wp_kses_post( $icono ); ?>
                                </div>
                            <?php endif; ?>
                            <h3><?php echo esc_html( $nombre ); ?></h3>
                            <p><?php echo esc_html( $descripcion ); ?></p>
                            <a href="<?php echo esc_url( $cta_enlace ); ?>" class="btn btn-ghost">
                                <?php echo esc_html( $cta_texto ); ?>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contacto" style="padding: 80px 0; background: var(--w-bg2);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 40px;">
                <?php esc_html_e( 'Contacto', 'mi-portfolio' ); ?>
            </h2>
            <div style="max-width: 600px; margin: 0 auto;">
                <?php
                // Display contact form from Contacto page or Formspree
                $contact_page = get_page_by_path( 'contacto' );
                if ( $contact_page ) {
                    echo apply_filters( 'the_content', $contact_page->post_content );
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
