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
  /*Enqueue The Styles and different css file when on mobile devices*/
  if ( wp_is_mobile() ) {
    /* Display and echo mobile specific stuff here */
  } else {
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/style.css' ); 
  }

  /*Enqueue The Script*/
  wp_enqueue_script( 'yubinbango', '//yubinbango.github.io/yubinbango/yubinbango.js', array(), null, true );
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
 // MW WP Formのクラスをyubinbangoのクラスに変更する
function mwform_form_class() {
  ?>
  <script>
  jQuery(function($) {
    $( '.mw_wp_form form' ).attr( 'class', 'h-adr' );
  });
  </script>
  <?php
  }
  add_action( 'wp_head', 'mwform_form_class', 10000 );

  /**-------------------------------------------------------
 google map
 --------------------------------------------------------*/

 function add_googlemap_script() {
  wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAh9T429yUCrOJT2KqK_tzjg6wcuti4HAc', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_googlemap_script' );

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyAh9T429yUCrOJT2KqK_tzjg6wcuti4HAc';
	return $api;
}
 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

   /**-------------------------------------------------------
 single excerpt
 --------------------------------------------------------*/
function my_length($length){
  return 10;
}
add_filter('excerpt_mblength','my_length');
function my_more($more){
  return '...';
}
add_filter('excerpt_more','my_more');
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
 