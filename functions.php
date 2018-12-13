<?php

 /**-------------------------------------------------------
 Remove empty paragraphs created by wpautop()
 --------------------------------------------------------*/
function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
	return $content;
}
function additional_custom_styles() {
  /*Enqueue The Styles*/
  wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/style.css' ); 
  /*Enqueue The Script*/
  wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/myscript.js', array( 'jquery' ), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );


function cmsfactory_setup() {
  // add_theme_support( 'title-tag' );
  // add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'cmsfactory_setup' );




 /**-------------------------------------------------------
 register menu navigation
 --------------------------------------------------------*/
 function register_my_menu() {
  register_nav_menus( array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu',
  ) );
}
add_action( 'init', 'register_my_menu' );



  /**-------------------------------------------------------
   register widget
 --------------------------------------------------------*/

  /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/
   /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/
   /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/
   /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/
   /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/
   /**-------------------------------------------------------
 Remove 
 --------------------------------------------------------*/