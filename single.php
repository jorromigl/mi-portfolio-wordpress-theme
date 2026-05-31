<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class="container" style="padding-top: 120px; padding-bottom: 60px;">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article class="post-single" style="max-width: 800px; margin: 0 auto;">
            <header class="post-header" style="margin-bottom: 40px;">
                <h1><?php the_title(); ?></h1>
                <div class="post-meta" style="color: var(--w-ivory-dim); font-size: 0.875rem;">
                    <span><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
                    <?php
                    $categories = get_the_category();
                    if ( $categories ) {
                        echo ' · ';
                        foreach ( $categories as $cat ) {
                            echo esc_html( $cat->name );
                        }
                    }
                    ?>
                </div>
            </header>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <footer class="post-footer" style="margin-top: 60px; padding-top: 40px; border-top: 1px solid var(--w-border);">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="btn btn-ghost">
                    ← <?php esc_html_e( 'Volver al blog', 'mi-portfolio' ); ?>
                </a>
            </footer>
        </article>
        <?php
    endwhile;
    ?>
</main>
<?php get_footer();
