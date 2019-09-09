<?php 
	// Add function for linking css and js file.
	function first_wordpress(){
		//Link CSS File
		wp_enqueue_style( 'mainstyle', get_template_directory_uri() .'/asset/css/main.css', array(), '1.0.0','all' );
		wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() .'/asset/css/bootstrap.min.css', array(), '1.0.0','all');

		//Link js File
		wp_enqueue_script( 'mainscript', get_template_directory_uri() .'/asset/js/main.js', array(), '1.0.0',true );
		wp_enqueue_script( 'jqueryscript', get_template_directory_uri() .'/asset/js/jquery.min.js', array(), '1.0.0',true );
		wp_enqueue_script( 'bootstrapscript', get_template_directory_uri() .'/asset/js/bootstrap.min.js', array(), '1.0.0',true );
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