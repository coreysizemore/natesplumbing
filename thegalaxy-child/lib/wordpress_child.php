<?php
	
	/*
		Call Custom Styles
	*/
	

	function galaxy_scriptss() 
	{
		
		wp_enqueue_style( 'galaxy-child-style', get_stylesheet_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'galaxy-child-custom-style', get_stylesheet_directory_uri() . '/css/custom.css' );
	    wp_enqueue_style( 'google-font-four', 'https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@400;900&display=swap' );
	    wp_enqueue_style( 'google-font-five', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&display=swap' );
	    
	}
	
	add_action( 'wp_enqueue_scripts', 'galaxy_scriptss', 99 );
	
?>