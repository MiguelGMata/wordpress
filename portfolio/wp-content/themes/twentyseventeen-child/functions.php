<?php
	function enqueue_styles_child_theme() {

		$parent_style = 'twentyseventeen-style'; // variable que hace referencia al padre
		$child_style  = 'twentyseventeen-child-style';

		wp_enqueue_style( $parent_style, // esta funcion sirve para encolar unarchivo css
					get_template_directory_uri() . '/style.css' );//llama al estilo del padre

		wp_enqueue_style( $child_style, // esta funcion sirve para encolar unarchivo css hijo
					get_stylesheet_directory_uri() . '/style.css',
					array( $parent_style ),  //decimos que este este depende del padre y hay que cargar primero el tema del padre y despues el del hijo
					wp_get_theme()->get('Version')
					);
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );
