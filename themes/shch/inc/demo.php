<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'nuestras_empresas_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * @return void
 */
function nuestras_empresas_register_meta_boxes( $meta_boxes )
{
	// Better has an underscore as last sign
	$prefix = 'nuestras_empresas_';

	// Logo Gris
	$meta_boxes[] = array(
		'id' => 'logo-gris',
		'title' => __( 'Logo gris', 'rwmb' ),
		'pages' => array( 'nuestras-empresas' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'             => __( 'Arrastra aquí el logo original en gris con el formato: "nombre.png"', 'rwmb' ),
				'id'               => "{$prefix}plupload-gris",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
			),
		)
	);

	// Logo Color
	$meta_boxes[] = array(
		'id' => 'logo-color',
		'title' => __( 'Logo color', 'rwmb' ),
		'pages' => array( 'nuestras-empresas' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'             => __( 'Arrastra aquí el logo a colores con el formato: "color-nombre.png"', 'rwmb' ),
				'id'               => "{$prefix}plupload-color",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
			),
		)
	);

	// Logo Blanco
	$meta_boxes[] = array(
		'id' => 'logo-blanco',
		'title' => __( 'Logo blanco', 'rwmb' ),
		'pages' => array( 'nuestras-empresas' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'             => __( 'Arrastra aquí el logo en blanco, con el formato: "nombre-blanco.png"', 'rwmb' ),
				'id'               => "{$prefix}plupload-blanco",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
			),
		)
	);

	// Slider
	$meta_boxes[] = array(
		'id' => 'slider',
		'title' => __( 'Slider', 'rwmb' ),
		'pages' => array( 'nuestras-empresas' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'             => __( 'Arrastra aquí las fotos para el slider', 'rwmb' ),
				'id'               => "{$prefix}plupload-slider",
				'type'             => 'plupload_image',
				'max_file_uploads' => 10,
			),
		)
	);

	// Cover
	$meta_boxes[] = array(
		'id' => 'cover',
		'title' => __( 'Cover', 'rwmb' ),
		'pages' => array( 'nuestras-empresas' ),
		'context' => 'normal',
		'priority' => 'high',
		'autosave' => true,
		'fields' => array(
			array(
				'name'             => __( 'Arrastra aquí la imagen de fondo', 'rwmb' ),
				'id'               => "{$prefix}plupload-cover",
				'type'             => 'plupload_image',
				'max_file_uploads' => 1,
			),
		)
	);


	return $meta_boxes;
}

