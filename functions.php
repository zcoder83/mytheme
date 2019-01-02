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
 if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5c1f94716500f',
    'title' => 'specific',
    'fields' => array(
      array(
        'key' => 'field_5c1f94a2e3037',
        'label' => '物件名',
        'name' => '物件名',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f94f5e3038',
        'label' => '所在地',
        'name' => '所在地',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9538e3039',
        'label' => '交通',
        'name' => '交通',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f956de303a',
        'label' => '販売戸数',
        'name' => '販売戸数',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f959fe303b',
        'label' => '販売価格',
        'name' => '販売価格',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f95d6e303c',
        'label' => '敷地面積',
        'name' => '敷地面積',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f95eae303d',
        'label' => '土地権利',
        'name' => '土地権利',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f95ede303e',
        'label' => '地目',
        'name' => '地目',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9602e303f',
        'label' => '都市計画',
        'name' => '都市計画',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f960de3040',
        'label' => '用途地域',
        'name' => '用途地域',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9610e3041',
        'label' => '用途地域',
        'name' => '用途地域',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9626e3042',
        'label' => '容積率',
        'name' => '容積率',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9632e3043',
        'label' => '防火指定',
        'name' => '防火指定',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9639e3044',
        'label' => '設備',
        'name' => '設備',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f9653e3045',
        'label' => '接道道路',
        'name' => '',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f96636e254',
        'label' => '現況',
        'name' => '現況',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5c1f96736e255',
        'label' => '引渡',
        'name' => '引渡',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));
  
  endif;