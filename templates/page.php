<?php
/**
 * Standard page template (Sobre mí, Contacto, Legal pages)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<main class="container" style="padding-top: 120px; padding-bottom: 60px;">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article class="post-page">
            <h1><?php the_title(); ?></h1>

            <div class="post-content" style="max-width: 800px; margin: 40px auto;">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
