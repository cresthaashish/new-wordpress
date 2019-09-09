<?php 
	// Add function for linking css and js file.
	function first_wordpress(){
		//Link CSS File
		wp_enqueue_style( 'firststyle', get_template_directory_uri() .'css/main.css', array(), '1.0.0','all' );

		//Link js File
		wp_enqueue_script( 'firststyle', get_template_directory_uri() .'css/main.css', array(), '1.0.0','all' );
	}


	add_action( 'wp_enqueue_scripts' , 'first_wordpress' );

	// Add theme menu
	function first_theme_function(){
		add_theme_support( 'menus' );
		register_nav_menu( 'primary', 'primary header navigation' );
		register_nav_menu( 'secondary', 'secondary footer navigation' );
	}

	add_action( 'init','first_theme_function' );

	add_theme_support( 'custom-background' );
?>