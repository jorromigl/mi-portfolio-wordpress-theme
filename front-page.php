<?php
/**
 * Homepage template (front-page.php)
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

// Get ACF fields if available, fallback to defaults
$hero_titulo = function_exists('get_field') ? get_field('hero_titulo') : '';
$hero_subtitulo = function_exists('get_field') ? get_field('hero_subtitulo') : '';
$sobre_mi_titulo = function_exists('get_field') ? get_field('sobre_mi_titulo') : '';
$sobre_mi_texto = function_exists('get_field') ? get_field('sobre_mi_texto') : '';

if ( ! $hero_titulo ) $hero_titulo = get_bloginfo('name');
if ( ! $hero_subtitulo ) $hero_subtitulo = get_bloginfo('description');
if ( ! $sobre_mi_titulo ) $sobre_mi_titulo = 'Sobre Mí';
?>

<main>
    <!-- Hero Section -->
    <section id="inicio" style="padding: 160px 0 100px; text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(180deg, var(--w-bg) 0%, var(--w-bg2) 100%);"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <span class="w-label" style="margin-bottom: 24px;">✦ Escritora, correctora y lectora editorial</span>
            <h1 class="gradient-text-w" style="font-size: 4rem; margin: 24px 0 20px; font-weight: 900; font-family: var(--font-display);">
                <?php echo esc_html( $hero_titulo ); ?>
            </h1>
            <p style="font-size: 1.2rem; color: var(--w-ivory-dim); max-width: 600px; margin: 0 auto 40px; font-family: var(--font-lora);">
                <?php echo esc_html( $hero_subtitulo ); ?>
            </p>
            <a href="#contacto" class="w-btn"><span>Contactar</span></a>
        </div>
    </section>

    <!-- Sobre Mí Section -->
    <section id="sobre-mi" class="section-alt">
        <div class="container" style="max-width: 800px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <span class="w-label">✦ Conóceme</span>
                <h2 style="margin-top: 16px; font-weight: 800;"><?php echo esc_html( $sobre_mi_titulo ); ?></h2>
            </div>
            <div style="color: var(--w-ivory-dim); font-size: 1rem; line-height: 1.8;">
                <?php
                if ( $sobre_mi_texto ) {
                    echo wpautop( esc_html( $sobre_mi_texto ) );
                } else {
                    // Show page content if exists
                    $sobre_page = get_page_by_path( 'sobre-mi' );
                    if ( $sobre_page ) {
                        echo apply_filters( 'the_content', $sobre_page->post_content );
                    } else {
                        echo '<p>Edita esta sección desde el panel de WordPress.</p>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="w-label">✦ Qué puedo hacer por ti</span>
                <h2 style="margin-top: 16px; font-weight: 800;">Servicios</h2>
            </div>
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
                        $nombre = function_exists('get_field') ? get_field('servicio_nombre') : get_the_title();
                        $descripcion = function_exists('get_field') ? get_field('servicio_descripcion') : '';
                        $icono = function_exists('get_field') ? get_field('servicio_icono') : '';
                        $cta_texto = function_exists('get_field') ? get_field('servicio_cta_texto') : 'Solicitar';
                        $cta_enlace = function_exists('get_field') ? get_field('servicio_cta_enlace') : '#contacto';
                        ?>
                        <div class="card" style="padding: 32px; display: flex; flex-direction: column;">
                            <?php if ( $icono ) : ?>
                                <div style="margin-bottom: 16px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border);">
                                    <?php echo wp_kses_post( $icono ); ?>
                                </div>
                            <?php endif; ?>
                            <h3 style="font-weight: 700; font-size: 1.25rem;"><?php echo esc_html( $nombre ); ?></h3>
                            <p style="flex: 1; font-size: 0.9rem;"><?php echo esc_html( $descripcion ); ?></p>
                            <a href="<?php echo esc_url( $cta_enlace ); ?>" class="btn-ghost" style="margin-top: 20px; text-align: center; justify-content: center;">
                                <?php echo esc_html( $cta_texto ); ?>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="card" style="padding: 32px;">
                        <h3>Informes de Lectura</h3>
                        <p style="font-size: 0.9rem;">Añade tus servicios desde el panel de WordPress → Servicios</p>
                    </div>
                    <div class="card" style="padding: 32px;">
                        <h3>Corrección Literaria</h3>
                        <p style="font-size: 0.9rem;">Añade tus servicios desde el panel de WordPress → Servicios</p>
                    </div>
                    <div class="card" style="padding: 32px;">
                        <h3>Asesoramiento Editorial</h3>
                        <p style="font-size: 0.9rem;">Añade tus servicios desde el panel de WordPress → Servicios</p>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Mis Libros Section -->
    <section id="mis-libros" class="section-alt">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span class="w-label">✦ Mis obras</span>
                <h2 style="margin-top: 16px; font-weight: 800;">Mis Libros</h2>
            </div>
            <div class="grid grid-3">
                <?php
                $obras = new WP_Query( array(
                    'post_type'      => 'obra',
                    'posts_per_page' => 6,
                    'order'          => 'DESC',
                ) );

                if ( $obras->have_posts() ) :
                    while ( $obras->have_posts() ) : $obras->the_post();
                        $titulo = function_exists('get_field') ? get_field('obra_titulo') : get_the_title();
                        $imagen = function_exists('get_field') ? get_field('obra_imagen') : '';
                        $categoria = function_exists('get_field') ? get_field('obra_categoria') : '';
                        ?>
                        <article class="card" style="padding: 0; overflow: hidden;">
                            <?php
                            if ( $imagen ) {
                                echo '<div style="aspect-ratio: 2/3; overflow: hidden;">';
                                echo wp_get_attachment_image( $imagen, 'large', false, array(
                                    'style' => 'width: 100%; height: 100%; object-fit: cover;'
                                ) );
                                echo '</div>';
                            }
                            ?>
                            <div style="padding: 20px;">
                                <?php if ( $categoria ) : ?>
                                    <span class="w-label" style="margin-bottom: 12px;"><?php echo esc_html( $categoria ); ?></span>
                                <?php endif; ?>
                                <h3 style="font-size: 1.1rem; margin-top: 8px;"><?php echo esc_html( $titulo ); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="btn-ghost" style="margin-top: 16px; font-size: 0.85rem;">
                                    Ver detalles
                                </a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p style="text-align: center; grid-column: 1/-1; color: var(--w-muted);">Añade tus libros desde el panel de WordPress → Mis libros</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Contacto Section -->
    <section id="contacto" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;">
                <span class="w-label">✦ Hablemos</span>
                <h2 style="margin-top: 16px; font-weight: 800;">Contacto</h2>
            </div>
            <div style="max-width: 600px; margin: 0 auto;">
                <form action="https://formspree.io/f/mzdwwlzq" method="POST">
                    <input type="text" name="nombre" placeholder="Tu nombre" required>
                    <input type="email" name="email" placeholder="Tu email" required>
                    <input type="text" name="asunto" placeholder="Asunto" required>
                    <textarea name="mensaje" rows="5" placeholder="Tu mensaje" required></textarea>
                    <input type="text" name="_gotcha" style="display:none">
                    <div style="text-align: center;">
                        <button type="submit" class="w-btn"><span>Enviar mensaje</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
