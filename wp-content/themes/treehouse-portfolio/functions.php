<?php 

// By default Wordpress does not support menus and post-thumbnails
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 


// CREATING WEBSITE MENU
function register_theme_menus() {

  // register_nav_menus accepts an array of menus you want on your site
  // the menu will then show up under "Manage Locations" on the WordPress Admin Dashboard
  register_nav_menus(
    array(
      'primary-menu'  => __( 'Primary Menu', 'treehouse-portfolio' )      
    )
  );

}
// Calls this function when WordPress first initializes
add_action( 'init', 'register_theme_menus' );



// IMPORTING STYLES
function wpt_theme_styles() {

  // wp_enqueue_style( name, link, ) lets us link to a stylesheet
  // get_template_directory_uri() is the root directory of the active theme
  wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
  // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
// Tells Wordpress to run the wpt_theme_styles() function
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );


// IMPORTING JAVASCRIPT
function wpt_theme_js() {

  // wp_enqueue_script( name, link, array of dependents, version, appear in footer boolean?)
  wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js' ); 
  wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'));
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery')); 


}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );




?>