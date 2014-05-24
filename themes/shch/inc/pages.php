<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){

		// Home
		if( ! get_page_by_path('la-empresa') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'La empresa',
				'post_name'   => 'la-empresa',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Nosotros
		if( ! get_page_by_path('nosotros') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Nosotros',
				'post_name'   => 'nosotros',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Nuestras empresas
		if( ! get_page_by_path('nuestras-empresas') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Nuestras empresas',
				'post_name'   => 'nuestras-empresas',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Noticias
		if( ! get_page_by_path('noticias') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Noticias',
				'post_name'   => 'noticias',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto Recibido
		if( ! get_page_by_path('contacto-recibido') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto Recibido',
				'post_name'   => 'contacto-recibido',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Estrategia
		if( ! get_page_by_path('estrategia') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Estrategia',
				'post_name'   => 'estrategia',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
