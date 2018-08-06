<?php
/**
 *
 * @package clutterless
 * @since clutterless 2.5.2
 *  @license CCA 3.0
 * 
 */

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function clutterless_enqueue_styles() {

	# Google Fonts
  	wp_register_style( 'clutterless-fonts' , "//fonts.googleapis.com/css?family=Lora:400,400italic|Oswald:400,600", array(), clutterless_theme_version, 'screen' );
  	wp_enqueue_style( 'clutterless-fonts' );                 

	# Main stylesheet
  	wp_register_style( 'clutterless-main-styles' , get_template_directory_uri(). "/style.css" , array(), clutterless_theme_version, 'screen' );  	
  	wp_enqueue_style( 'clutterless-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'clutterless_enqueue_styles' );

#-------------------------------------------------------------
# Enqueue Scripts 
#-------------------------------------------------------------

# False = Header
# True = Footer

function clutterless_enqueue_scripts() {

	# Custom Scripts 
	wp_register_script  ( 'clutterless-custom-code' , get_template_directory_uri().'/frontend/js/custom-code-min.js' , array(), clutterless_theme_version, true );
	wp_enqueue_script ( 'clutterless-custom-code' );  

}

add_action( 'wp_enqueue_scripts' , 'clutterless_enqueue_scripts'   );
