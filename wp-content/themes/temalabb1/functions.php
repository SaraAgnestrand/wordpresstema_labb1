

<?php

//Adding theme supports
function adding_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('widgets');
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'adding_theme_support');

//Enqueque styles and scripts. Om jag har förstår rätt så behöver 
//man inte registrera innan utan det görs automatiskt i denna function??
function enqueue_theme_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap-style'), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontawesome-style', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0', 'all' );
    wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . 'assets/js/script.js', array('jquery')); 
}

add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );


// Location for the menus
function theme_menus(){

    $locations = array(
        'Meny 1' => "Meny 1",
        'Meny under' => "Meny under", 
        'Meny under2' => "Meny under2",
        
     
    );

    register_nav_menus($locations);
}

add_action('init', 'theme_menus');


//Registration for the sidebars 
function register_widgets_init(){
    
    register_sidebar(
        array(
            'name' => 'Footer',
            'description' => 'Widget area footer',
            'id' => 'footer-area',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );


    register_sidebar(
        array(
            'name' =>  __('Footer 1', 'custom-theme'),
            'description' => 'Widget area footer 1',
            'id' => 'Footer1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        ));


    register_sidebar(
        array(
            'name' =>  __('Footer 2', 'custom-theme'),
            'description' => 'Widget area footer 2',
            'id' => 'Footer2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        
        )
    );


    register_sidebar(
        array(
            'name' => __('Footer 3', 'custom-theme'),
            'description' => 'Widget area footer 3',
            'id' => 'Footer3',
            'before_widget' => '<li>',
            'after_widget' => '</li>',
            'before_title' => '<i class="fa %1$s"></i> <a href="%2$s">',
            'after_title' => '</a>',
        )
    );


    register_sidebar(
        array(
            'name' =>  __('Footer 4', 'custom-theme'),
            'description' => 'Widget area footer 4',
            'id' => 'Footer4',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>',
        )
    );


    register_sidebar(
        array(
            'name' => __('Aside 1', 'custom-theme'),
            'description' => 'Widget Aside 1',
            'id' => 'Aside1'
        )
    );


    register_sidebar(
        array(
            'name' => __('Aside 2', 'custom-theme'),
            'description' => 'Widget Aside 2',
            'id' => 'Aside2'
        )
    );


    register_sidebar(
        array(
            'name' => __('Aside 3', 'custom-theme'),
            'description' => 'Widget Aside 3',
            'id' => 'Aside3'
        )
    );


}


add_action('widgets_init', 'register_widgets_init');

?>