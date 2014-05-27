<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// Nuestras empresas
		$labels = array(
			'name'          => 'Nuestras empresas',
			'singular_name' => 'Empresas',
			'add_new'       => 'Nueva Empresa',
			'add_new_item'  => 'Nueva Empresa',
			'edit_item'     => 'Editar Empresa',
			'new_item'      => 'Nueva Empresa',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Empresa',
			'search_items'  => 'Buscar Nuestras empresas',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Nuestras empresas'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'nuestras-empresas' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor' )
		);
		register_post_type( 'nuestras-empresas', $args );

		// Covers
		$labels = array(
			'name'          => 'Cover Fotos',
			'singular_name' => 'Cover Foto',
			'add_new'       => 'Nueva Cover Foto',
			'add_new_item'  => 'Nueva Cover Foto',
			'edit_item'     => 'Editar Cover Foto',
			'new_item'      => 'Cover Foto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Cover Foto',
			'search_items'  => 'Buscar Cover Foto',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Covers Foto'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cover-fotos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'cover-photos', $args );

		// Covers
		$labels = array(
			'name'          => 'Cover Fotos',
			'singular_name' => 'Cover Foto',
			'add_new'       => 'Nueva Cover Foto',
			'add_new_item'  => 'Nueva Cover Foto',
			'edit_item'     => 'Editar Cover Foto',
			'new_item'      => 'Cover Foto',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver Cover Foto',
			'search_items'  => 'Buscar Cover Foto',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Covers Foto'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'cover-fotos' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'cover-photos', $args );

	});