<?php
/**
 * Homepage template (front-page.php)
 * Matches the Astro portfolio structure
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
    <!-- ═══ Hero Section ═══ -->
    <section id="inicio" style="padding: 140px 0 80px; text-align: center; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(180deg, var(--w-bg) 0%, var(--w-bg2) 100%);"></div>
        <div class="container" style="position: relative; z-index: 1;">
            <span class="w-label" style="margin-bottom: 24px;">✦ <?php echo esc_html( $hero_subtitulo ); ?></span>
            <h1 class="gradient-text-w" style="font-size: clamp(2.5rem, 6vw, 5rem); margin: 24px 0 20px; font-weight: 900; font-family: var(--font-display); line-height: 1.1;">
                <?php echo esc_html( $hero_titulo ); ?>
            </h1>
            <p style="font-size: 1.15rem; color: var(--w-ivory-dim); max-width: 550px; margin: 0 auto 40px; font-family: var(--font-lora); line-height: 1.7;">
                <?php echo esc_html( $hero_subtitulo ); ?>
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="#contacto" class="w-btn"><span>Contactar</span></a>
                <a href="#sobre-mi" class="w-btn-ghost">Conóceme</a>
            </div>
        </div>
    </section>

    <!-- ═══ Roles Section (Lector, Escritor, Corrector) ═══ -->
    <section style="padding: 96px 0; overflow: hidden; background: var(--w-bg2); position: relative;">
        <div style="position: absolute; top: 0; left: 0; right: 0; height: 1px; background: linear-gradient(90deg, transparent, var(--w-gold), transparent);"></div>
        <div class="container">
            <div style="text-align: center; margin-bottom: 64px;" class="reveal">
                <span class="w-label" style="margin-bottom: 24px;">✦ Tres pasiones, un mismo amor</span>
                <h2 style="margin-top: 20px; font-weight: 900; font-size: clamp(1.8rem, 3vw, 2.5rem);">
                    Lectora, escritora y <span class="gradient-text-w">correctora</span>
                </h2>
                <p style="max-width: 640px; margin: 20px auto 0; color: var(--w-ivory-dim); font-family: var(--font-lora); font-size: 1rem; line-height: 1.7;">
                    Tres facetas de la misma pasión por las palabras. Leo para aprender, escribo para soñar y corrijo para que las historias ajenas brillen como merecen.
                </p>
            </div>

            <div class="grid grid-3">
                <!-- Lectora -->
                <article class="card reveal" style="padding: 32px; display: flex; flex-direction: column; height: 100%;">
                    <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 5c0-1.5 2.5-2.5 6-2.5s6 1 6 2.5v14c0 1.5-2.5 2.5-6 2.5S6 20.5 6 19V5z"/><path d="M12 5v14"/>
                        </svg>
                    </div>
                    <h3 style="font-weight: 700; font-size: 1.5rem; margin-bottom: 4px;">Lectora</h3>
                    <p style="font-size: 0.85rem; font-style: italic; color: var(--w-burgundy-l); margin-bottom: 16px; font-family: var(--font-lora);">Primero leo, luego escribo</p>
                    <p style="font-size: 0.9rem; line-height: 1.7; flex: 1; margin-bottom: 24px;">La lectura es mi oficio secreto. Leo más de ochenta libros al año — fantasía, romance, histórica, ensayo — porque cada página es una lección de ritmo, voz y emoción que luego uso en mis propias historias y en la corrección.</p>
                    <a href="#lecturas" class="w-btn-ghost" style="justify-content: center; font-size: 0.85rem;">Ver mis lecturas</a>
                </article>

                <!-- Escritora -->
                <article class="card reveal" style="padding: 32px; display: flex; flex-direction: column; height: 100%;">
                    <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20l8-8-3-3-8 8v3h3z"/><path d="M15 7l3 3"/>
                        </svg>
                    </div>
                    <h3 style="font-weight: 700; font-size: 1.5rem; margin-bottom: 4px;">Escritora</h3>
                    <p style="font-size: 0.85rem; font-style: italic; color: var(--w-burgundy-l); margin-bottom: 16px; font-family: var(--font-lora);">Mundos que no existen</p>
                    <p style="font-size: 0.9rem; line-height: 1.7; flex: 1; margin-bottom: 24px;">Escribo novelas de fantasía, romance histórico e histórica sobre personajes que se reencuentran a sí mismos en el camino. Mujeres y hombres fuertes que aún no saben que lo son.</p>
                    <a href="#mis-libros" class="w-btn-ghost" style="justify-content: center; font-size: 0.85rem;">Descubrir mis libros</a>
                </article>

                <!-- Correctora -->
                <article class="card reveal" style="padding: 32px; display: flex; flex-direction: column; height: 100%;">
                    <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="10.5" cy="10.5" r="5.5"/><path d="M15 15l4.5 4.5"/>
                        </svg>
                    </div>
                    <h3 style="font-weight: 700; font-size: 1.5rem; margin-bottom: 4px;">Correctora</h3>
                    <p style="font-size: 0.85rem; font-style: italic; color: var(--w-burgundy-l); margin-bottom: 16px; font-family: var(--font-lora);">Tu voz, en su mejor versión</p>
                    <p style="font-size: 0.9rem; line-height: 1.7; flex: 1; margin-bottom: 24px;">Corrijo manuscritos con la mirada de quien escribe y de quien lee: ortotipografía y estilo, siempre respetando la voz del autor. Entiendo el miedo a que toquen tu texto porque yo también lo he sentido.</p>
                    <a href="#servicios" class="w-btn-ghost" style="justify-content: center; font-size: 0.85rem;">Servicios de corrección</a>
                </article>
            </div>
        </div>
    </section>

    <!-- ═══ Ornament ═══ -->
    <div class="ornament" style="padding: 0 2rem;">✦</div>

    <!-- ═══ Sobre Mí Section ═══ -->
    <section id="sobre-mi" class="section">
        <div class="container" style="max-width: 800px;">
            <div style="text-align: center; margin-bottom: 40px;" class="reveal">
                <span class="w-label">✦ Conóceme</span>
                <h2 style="margin-top: 16px; font-weight: 800;"><?php echo esc_html( $sobre_mi_titulo ); ?></h2>
            </div>
            <div class="reveal" style="color: var(--w-ivory-dim); font-size: 1rem; line-height: 1.8;">
                <?php
                if ( $sobre_mi_texto ) {
                    echo wpautop( esc_html( $sobre_mi_texto ) );
                } else {
                    $sobre_page = get_page_by_path( 'sobre-mi' );
                    if ( $sobre_page ) {
                        echo apply_filters( 'the_content', $sobre_page->post_content );
                    } else {
                        echo '<p style="text-align: center;">Edita esta sección desde el panel de WordPress → Páginas → Sobre Mí.</p>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ═══ Ornament ═══ -->
    <div class="ornament" style="padding: 0 2rem;">✦</div>

    <!-- ═══ Servicios Section ═══ -->
    <section id="servicios" class="section-alt">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;" class="reveal">
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
                        <div class="card reveal" style="padding: 32px; display: flex; flex-direction: column;">
                            <?php if ( $icono ) : ?>
                                <div style="margin-bottom: 16px; width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border);">
                                    <?php echo wp_kses_post( $icono ); ?>
                                </div>
                            <?php endif; ?>
                            <h3 style="font-weight: 700; font-size: 1.25rem;"><?php echo esc_html( $nombre ); ?></h3>
                            <p style="flex: 1; font-size: 0.9rem; line-height: 1.7;"><?php echo esc_html( $descripcion ); ?></p>
                            <a href="<?php echo esc_url( $cta_enlace ); ?>" class="w-btn-ghost" style="margin-top: 20px; text-align: center; justify-content: center;">
                                <?php echo esc_html( $cta_texto ); ?>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="card" style="padding: 32px; display: flex; flex-direction: column;">
                        <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 5c0-1.5 2.5-2.5 6-2.5s6 1 6 2.5v14c0 1.5-2.5 2.5-6 2.5S6 20.5 6 19V5z"/><path d="M12 5v14"/>
                            </svg>
                        </div>
                        <h3 style="font-weight: 700; font-size: 1.25rem;">Informes de Lectura</h3>
                        <p style="flex: 1; font-size: 0.9rem; line-height: 1.7;">Añade tus servicios desde WordPress → Servicios</p>
                        <a href="#contacto" class="w-btn-ghost" style="margin-top: 20px; justify-content: center;">Solicitar</a>
                    </div>
                    <div class="card" style="padding: 32px; display: flex; flex-direction: column;">
                        <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="10.5" cy="10.5" r="5.5"/><path d="M15 15l4.5 4.5"/>
                            </svg>
                        </div>
                        <h3 style="font-weight: 700; font-size: 1.25rem;">Corrección Literaria</h3>
                        <p style="flex: 1; font-size: 0.9rem; line-height: 1.7;">Añade tus servicios desde WordPress → Servicios</p>
                        <a href="#contacto" class="w-btn-ghost" style="margin-top: 20px; justify-content: center;">Solicitar</a>
                    </div>
                    <div class="card" style="padding: 32px; display: flex; flex-direction: column;">
                        <div style="width: 44px; height: 44px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(212, 133, 122, 0.18); border: 1px solid var(--w-border); margin-bottom: 16px;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--w-burgundy-l)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 20l8-8-3-3-8 8v3h3z"/><path d="M15 7l3 3"/>
                            </svg>
                        </div>
                        <h3 style="font-weight: 700; font-size: 1.25rem;">Asesoramiento Editorial</h3>
                        <p style="flex: 1; font-size: 0.9rem; line-height: 1.7;">Añade tus servicios desde WordPress → Servicios</p>
                        <a href="#contacto" class="w-btn-ghost" style="margin-top: 20px; justify-content: center;">Solicitar</a>
                    </div>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ═══ Ornament ═══ -->
    <div class="ornament" style="padding: 0 2rem;">✦</div>

    <!-- ═══ Mis Libros Section ═══ -->
    <section id="mis-libros" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;" class="reveal">
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
                        <article class="card reveal" style="padding: 0; overflow: hidden;">
                            <?php
                            if ( $imagen ) {
                                echo '<div style="aspect-ratio: 2/3; overflow: hidden;">';
                                echo wp_get_attachment_image( $imagen, 'large', false, array(
                                    'style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;'
                                ) );
                                echo '</div>';
                            }
                            ?>
                            <div style="padding: 20px;">
                                <?php if ( $categoria ) : ?>
                                    <span class="w-label" style="margin-bottom: 12px;"><?php echo esc_html( $categoria ); ?></span>
                                <?php endif; ?>
                                <h3 style="font-size: 1.1rem; margin-top: 8px;"><?php echo esc_html( $titulo ); ?></h3>
                                <a href="<?php the_permalink(); ?>" class="w-btn-ghost" style="margin-top: 16px; font-size: 0.85rem; justify-content: center;">
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

    <!-- ═══ Blog Preview Section ═══ -->
    <?php
    $recent_posts = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'order'          => 'DESC',
    ) );

    if ( $recent_posts->have_posts() ) :
    ?>
    <div class="ornament" style="padding: 0 2rem;">✦</div>
    <section id="blog" class="section-alt">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;" class="reveal">
                <span class="w-label">✦ Últimas entradas</span>
                <h2 style="margin-top: 16px; font-weight: 800;">Blog</h2>
            </div>
            <div class="grid grid-3">
                <?php
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                    ?>
                    <article class="card reveal" style="padding: 28px; display: flex; flex-direction: column;">
                        <div style="margin-bottom: 16px;">
                            <?php
                            $categories = get_the_category();
                            if ( $categories ) {
                                echo '<span class="w-label">' . esc_html( $categories[0]->name ) . '</span>';
                            }
                            ?>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 12px;">
                            <a href="<?php the_permalink(); ?>" style="color: var(--w-ivory);"><?php the_title(); ?></a>
                        </h3>
                        <p style="font-size: 0.875rem; line-height: 1.7; flex: 1; margin-bottom: 20px;"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.8rem; color: var(--w-muted);"><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
                            <a href="<?php the_permalink(); ?>" class="w-btn-ghost" style="padding: 8px 20px; font-size: 0.8rem;">Leer</a>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- ═══ Ornament ═══ -->
    <div class="ornament" style="padding: 0 2rem;">✦</div>

    <!-- ═══ Contacto Section ═══ -->
    <section id="contacto" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 40px;" class="reveal">
                <span class="w-label">✦ Hablemos</span>
                <h2 style="margin-top: 16px; font-weight: 800;">Contacto</h2>
                <p style="max-width: 500px; margin: 16px auto 0; color: var(--w-ivory-dim); font-size: 0.95rem;">
                    ¿Tienes un manuscrito que necesita una mirada profesional? Escríbeme y hablamos.
                </p>
            </div>
            <div style="max-width: 600px; margin: 0 auto;" class="reveal">
                <form action="https://formspree.io/f/mzdwwlzq" method="POST" style="display: flex; flex-direction: column; gap: 4px;">
                    <label for="contact-name" style="font-size: 0.8rem; font-weight: 600; color: var(--w-ivory); margin-bottom: 2px;">Nombre</label>
                    <input type="text" id="contact-name" name="nombre" placeholder="Tu nombre" required>
                    <label for="contact-email" style="font-size: 0.8rem; font-weight: 600; color: var(--w-ivory); margin-bottom: 2px;">Email</label>
                    <input type="email" id="contact-email" name="email" placeholder="Tu email" required>
                    <label for="contact-subject" style="font-size: 0.8rem; font-weight: 600; color: var(--w-ivory); margin-bottom: 2px;">Asunto</label>
                    <input type="text" id="contact-subject" name="asunto" placeholder="¿En qué puedo ayudarte?" required>
                    <label for="contact-message" style="font-size: 0.8rem; font-weight: 600; color: var(--w-ivory); margin-bottom: 2px;">Mensaje</label>
                    <textarea id="contact-message" name="mensaje" rows="5" placeholder="Cuéntame sobre tu proyecto..." required></textarea>
                    <input type="text" name="_gotcha" style="display:none">
                    <div style="text-align: center; margin-top: 8px;">
                        <button type="submit" class="w-btn"><span>Enviar mensaje</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
