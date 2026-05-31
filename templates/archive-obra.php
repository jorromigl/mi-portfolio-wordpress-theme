<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 60px;">
    <h1 style="margin-bottom: 60px;"><?php post_type_archive_title(); ?></h1>
    <div class="grid grid-3">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $titulo = get_field( 'obra_titulo' );
                $imagen = get_field( 'obra_imagen' );
                $categoria = get_field( 'obra_categoria' );
                ?>
                <article class="card obra-card">
                    <?php
                    if ( $imagen ) {
                        echo wp_get_attachment_image( $imagen, 'medium', false, array(
                            'style' => 'border-radius: var(--radius-md); margin-bottom: 20px;'
                        ) );
                    }
                    ?>
                    <h3><?php echo esc_html( $titulo ?: the_title() ); ?></h3>
                    <?php if ( $categoria ) : ?>
                        <span class="w-label" style="margin-bottom: 15px; display: inline-block;">
                            <?php echo esc_html( $categoria ); ?>
                        </span>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-ghost" style="margin-top: 20px;">
                        <?php esc_html_e( 'Ver detalles', 'mi-portfolio' ); ?>
                    </a>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>' . esc_html__( 'No hay libros.', 'mi-portfolio' ) . '</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer();
