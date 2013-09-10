<?php

add_editor_style("library/css/editor-styles.css"); // editor styles for tinymce
// add_image_size( 'thumb-600', 600, 150, true );  // custom image size example


/************* Set Custom Image sizes ********************/
//add_image_size('featured', 1024, 350 , true);

//Call all JS scripts here, Foundation scripts, mean-menu any jquery place in scripts.js Which is already set to enque here
function responsive_scripts_basic()  
{  
    //register scripts for our theme  
    wp_register_script('foundation-mod', get_template_directory_uri() . '/javascripts/vendor/jquery.js', array( 'jquery' ), true );  
    wp_register_script('foundation-main', get_template_directory_uri() . '/javascripts/foundation/foundation.js', true );  
    wp_register_script('foundation-app', get_template_directory_uri() . '/javascripts/foundation/cookie.js', true ); 
    wp_register_script('mean-menu', get_template_directory_uri() . '/javascripts/mean-menu/jquery.meanmenu.2.0.min.js', true );
    wp_register_script('scripts', get_template_directory_uri() . '/javascripts/scripts.js', true );
    wp_enqueue_script( 'foundation-mod' );  
    wp_enqueue_script( 'foundation-main' );  
    wp_enqueue_script( 'foundation-app' ); 
    wp_enqueue_script( 'mean-menu' );
    wp_enqueue_script( 'scripts' );

}  
add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic', 5 );  

/************* SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function sl_register_sidebars() {

    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Twitter',
    	'description' => 'The first (primary) sidebar.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'id' => 'sidebar-two',
        'name' => 'Instagram',
        'description' => 'The second (primary) sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
        register_sidebar(array(
        'id' => 'sidebar-three',
        'name' => 'Recent Video',
        'description' => 'Place Video Here',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
        register_sidebar(array(
        'id' => 'sidebar-four',
        'name' => 'Facebook',
        'description' => 'Facebook',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widgettitle">',
        'after_title' => '</h4>',
    ));
  } 

