<?php
/**
 * Advanced Custom Fields (ACF) configuration
 * Define field groups programmatically
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register ACF field group for Obra (Books)
 */
function mipo_register_obra_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ) {
        acf_add_local_field_group( array(
            'key'      => 'group_obra_details',
            'title'    => esc_html__( 'Detalles del Libro', 'mi-portfolio' ),
            'fields'   => array(
                array(
                    'key'           => 'field_obra_titulo',
                    'label'         => esc_html__( 'Título del Libro', 'mi-portfolio' ),
                    'name'          => 'obra_titulo',
                    'type'          => 'text',
                    'required'      => 1,
                ),
                array(
                    'key'           => 'field_obra_sinopsis',
                    'label'         => esc_html__( 'Sinopsis', 'mi-portfolio' ),
                    'name'          => 'obra_sinopsis',
                    'type'          => 'textarea',
                    'rows'          => 5,
                ),
                array(
                    'key'           => 'field_obra_imagen',
                    'label'         => esc_html__( 'Portada', 'mi-portfolio' ),
                    'name'          => 'obra_imagen',
                    'type'          => 'image',
                    'return_format' => 'id',
                ),
                array(
                    'key'           => 'field_obra_categoria',
                    'label'         => esc_html__( 'Categoría', 'mi-portfolio' ),
                    'name'          => 'obra_categoria',
                    'type'          => 'select',
                    'choices'       => array(
                        'novela'    => esc_html__( 'Novela', 'mi-portfolio' ),
                        'cuento'    => esc_html__( 'Cuento', 'mi-portfolio' ),
                        'ensayo'    => esc_html__( 'Ensayo', 'mi-portfolio' ),
                        'poesia'    => esc_html__( 'Poesía', 'mi-portfolio' ),
                    ),
                ),
                array(
                    'key'           => 'field_obra_fecha',
                    'label'         => esc_html__( 'Fecha de Publicación', 'mi-portfolio' ),
                    'name'          => 'obra_fecha_publicacion',
                    'type'          => 'date_picker',
                    'display_format' => 'd/m/Y',
                    'return_format' => 'Y-m-d',
                ),
                array(
                    'key'           => 'field_obra_enlace',
                    'label'         => esc_html__( 'Enlace Externo', 'mi-portfolio' ),
                    'name'          => 'obra_enlace_externo',
                    'type'          => 'url',
                    'required'      => 0,
                ),
            ),
            'location'  => array(
                array(
                    array(
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'obra',
                    ),
                ),
            ),
        ) );
    }
}
add_action( 'acf/include_fields', 'mipo_register_obra_fields' );

/**
 * Register ACF field group for Servicio (Services)
 */
function mipo_register_servicio_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ) {
        acf_add_local_field_group( array(
            'key'      => 'group_servicio_details',
            'title'    => esc_html__( 'Detalles del Servicio', 'mi-portfolio' ),
            'fields'   => array(
                array(
                    'key'           => 'field_servicio_nombre',
                    'label'         => esc_html__( 'Nombre del Servicio', 'mi-portfolio' ),
                    'name'          => 'servicio_nombre',
                    'type'          => 'text',
                    'required'      => 1,
                ),
                array(
                    'key'           => 'field_servicio_descripcion',
                    'label'         => esc_html__( 'Descripción', 'mi-portfolio' ),
                    'name'          => 'servicio_descripcion',
                    'type'          => 'textarea',
                    'rows'          => 5,
                    'required'      => 1,
                ),
                array(
                    'key'           => 'field_servicio_icono',
                    'label'         => esc_html__( 'Ícono (SVG/HTML)', 'mi-portfolio' ),
                    'name'          => 'servicio_icono',
                    'type'          => 'textarea',
                    'rows'          => 3,
                ),
                array(
                    'key'           => 'field_servicio_orden',
                    'label'         => esc_html__( 'Orden', 'mi-portfolio' ),
                    'name'          => 'servicio_orden',
                    'type'          => 'number',
                    'default_value' => 1,
                ),
                array(
                    'key'           => 'field_servicio_cta_texto',
                    'label'         => esc_html__( 'Texto del Botón', 'mi-portfolio' ),
                    'name'          => 'servicio_cta_texto',
                    'type'          => 'text',
                    'default_value' => esc_html__( 'Solicitar', 'mi-portfolio' ),
                ),
                array(
                    'key'           => 'field_servicio_cta_enlace',
                    'label'         => esc_html__( 'Enlace del Botón', 'mi-portfolio' ),
                    'name'          => 'servicio_cta_enlace',
                    'type'          => 'url',
                    'default_value' => '#contacto',
                ),
            ),
            'location'  => array(
                array(
                    array(
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'servicio',
                    ),
                ),
            ),
        ) );
    }
}
add_action( 'acf/include_fields', 'mipo_register_servicio_fields' );

/**
 * Register ACF field group for Homepage options
 */
function mipo_register_homepage_fields() {
    if ( function_exists( 'acf_add_local_field_group' ) ) {
        acf_add_local_field_group( array(
            'key'      => 'group_homepage_options',
            'title'    => esc_html__( 'Opciones del Inicio', 'mi-portfolio' ),
            'fields'   => array(
                array(
                    'key'           => 'field_hero_titulo',
                    'label'         => esc_html__( 'Título Hero', 'mi-portfolio' ),
                    'name'          => 'hero_titulo',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_hero_subtitulo',
                    'label'         => esc_html__( 'Subtítulo Hero', 'mi-portfolio' ),
                    'name'          => 'hero_subtitulo',
                    'type'          => 'textarea',
                    'rows'          => 2,
                ),
                array(
                    'key'           => 'field_sobre_mi_titulo',
                    'label'         => esc_html__( 'Título de Sobre Mí', 'mi-portfolio' ),
                    'name'          => 'sobre_mi_titulo',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_sobre_mi_texto',
                    'label'         => esc_html__( 'Texto de Sobre Mí', 'mi-portfolio' ),
                    'name'          => 'sobre_mi_texto',
                    'type'          => 'textarea',
                    'rows'          => 5,
                ),
            ),
            'location'  => array(
                array(
                    array(
                        'param'    => 'page_type',
                        'operator' => '==',
                        'value'    => 'front_page',
                    ),
                ),
            ),
        ) );
    }
}
add_action( 'acf/include_fields', 'mipo_register_homepage_fields' );
