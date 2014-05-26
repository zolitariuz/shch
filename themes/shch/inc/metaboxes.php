<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){


	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_name_meta']) and check_admin_referer(__FILE__, '_name_meta_nonce') ){
			update_post_meta($post_id, '_name_meta', $_POST['_name_meta']);
		}


		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////

	function bd_parse_post_variables(){
	// bd_parse_post_variables function for WordPress themes by Nick Van der Vreken.
	// please refer to bydust.com/using-custom-fields-in-wordpress-to-attach-images-or-files-to-your-posts/
	// for further information or questions.
		global $post, $post_var;

		// fill in all types you'd like to list in an array, and
		// the label they should get if no label is defined.
		// example: each file should get label "Download" if no
		// label is set for that particular file.
		$types = array('image' => 'no info available',
		'file' => 'Download',
		'link' => 'Read more...');

		// this variable will contain all custom fields
		$post_var = array();
		foreach(get_post_custom($post->ID) as $k => $v) $post_var[$k] = array_shift($v);

		// creating the arrays
		foreach($types as $type => $message){
			global ${'post_'.$type.'s'}, ${'post_'.$type.'s_label'};
			$i = 1;
			${'post_'.$type.'s'} = array();
			${'post_'.$type.'s_label'} = array();
			while($post_var[$type.$i]){
				echo $type.$i.' - '.${$type.$i.'_label'};
				array_push(${'post_'.$type.'s'}, $post_var[$type.$i]);
				array_push(${'post_'.$type.'s_label'},  $post_var[$type.$i.'_label']?htmlspecialchars($post_var[$type.$i.'_label']):$message);
				$i++;
			}
		}
	}
