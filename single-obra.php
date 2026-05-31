<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 60px;">
    <?php
    while ( have_posts() ) : the_post();
        $titulo = get_field( 'obra_titulo' );
        $sinopsis = get_field( 'obra_sinopsis' );
        $imagen = get_field( 'obra_imagen' );
        $categoria = get_field( 'obra_categoria' );
        $fecha = get_field( 'obra_fecha_publicacion' );
        $enlace = get_field( 'obra_enlace_externo' );
        ?>
        <article class="obra-single" style="max-width: 900px; margin: 0 auto;">
            <div class="grid grid-2" style="gap: 60px; align-items: start;">
                <div>
                    <?php
                    if ( $imagen ) {
                        echo wp_get_attachment_image( $imagen, 'large', false, array(
                            'style' => 'border-radius: var(--radius-lg);'
                        ) );
                    }
                    ?>
                </div>
                <div>
                    <h1><?php echo esc_html( $titulo ?: the_title() ); ?></h1>
                    <?php if ( $categoria ) : ?>
                        <span class="w-label" style="margin-top: 15px; display: inline-block;">
                            <?php echo esc_html( $categoria ); ?>
                        </span>
                    <?php endif; ?>
                    <?php if ( $sinopsis ) : ?>
                        <p style="margin-top: 30px; font-size: 1.1rem;">
                            <?php echo wp_kses_post( wpautop( $sinopsis ) ); ?>
                        </p>
                    <?php endif; ?>
                    <?php if ( $fecha ) : ?>
                        <p style="margin-top: 20px; color: var(--w-ivory-dim);">
                            <strong><?php esc_html_e( 'Publicado:', 'mi-portfolio' ); ?></strong>
                            <?php echo esc_html( wp_date( 'd/m/Y', strtotime( $fecha ) ) ); ?>
                        </p>
                    <?php endif; ?>
                    <?php if ( $enlace ) : ?>
                        <a href="<?php echo esc_url( $enlace ); ?>" target="_blank" class="btn" style="margin-top: 30px;">
                            <?php esc_html_e( 'Ver más', 'mi-portfolio' ); ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'obra' ) ); ?>" class="btn btn-ghost" style="margin-top: 15px;">
                        ← <?php esc_html_e( 'Volver a mis libros', 'mi-portfolio' ); ?>
                    </a>
                </div>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>
<?php get_footer();
