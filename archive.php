<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 60px;">
    <h1 style="margin-bottom: 60px;"><?php esc_html_e( 'Blog', 'mi-portfolio' ); ?></h1>
    <div class="grid grid-2" style="max-width: 1000px;">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <article class="card post-card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                    <div class="post-meta" style="font-size: 0.875rem; color: var(--w-ivory-dim);">
                        <?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-ghost" style="margin-top: 20px;">
                        <?php esc_html_e( 'Leer más', 'mi-portfolio' ); ?>
                    </a>
                </article>
                <?php
            endwhile;
            the_posts_pagination( array(
                'mid_size'       => 2,
                'prev_text'      => esc_html__( '← Anterior', 'mi-portfolio' ),
                'next_text'      => esc_html__( 'Siguiente →', 'mi-portfolio' ),
            ) );
        else :
            echo '<p>' . esc_html__( 'No hay posts.', 'mi-portfolio' ) . '</p>';
        endif;
        ?>
    </div>
</main>
<?php get_footer();
