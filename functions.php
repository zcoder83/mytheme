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
 Numeric
 --------------------------------------------------------*/
 function pagination($pages = '', $range = 4)
{
$showitems = ($range * 2)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == '')
{
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages)
{
$pages = 1;
}
}
if(1 != $pages)
{
echo '<div class="pagination"><span>Page' . $paged . ' of  ' . $pages . '</span>';
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<a href="' . get_pagenum_link(1) . '"><< First</a>';
if($paged > 1 && $showitems < $pages) echo '<a href="'.get_pagenum_link($paged - 1).'">< Previous</a>';
for ($i=1; $i <= $pages; $i++)
{
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
echo ($paged == $i)? '<span class="current">' . $i . '</span>' : '<a href="' . get_pagenum_link($i) . '" 
class="inactive">' . $i . '</a>';
}
}
if ($paged < $pages && $showitems < $pages) echo '<a href="' . get_pagenum_link($paged + 1) . '">Next ></a>';
if ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) echo '<a href="' . get_pagenum_link($pages) . 
'">Last >></a>';
echo '</div>\n';
}
}

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
 