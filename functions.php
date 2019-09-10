<?php
/* Adds core functionality to the theme */
if ( ! function_exists( 'setupTheme' ) ) {
    function setupTheme() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        add_theme_support( 'custom-background', apply_filters( 'custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        add_theme_support( 'custom-logo' );
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'eruma-go' ),
            'menu-2' => esc_html__( 'One page', 'eruma-go' )
        ) );
        add_theme_support( 'post-thumbnails' );
    }
}
add_action( 'after_setup_theme', 'setupTheme' );

function addFooterSidebar() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'eruma-go' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Adds widgets to the footer of the theme.', 'eruma-go' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title title is-5">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'addFooterSidebar' );

function getThemeScriptsAndStyles() {
    // Unstyle Gutenberg blocks.
    wp_dequeue_style( 'wp-block-library' );
    // Stylesheets
    wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style( 'eruma-go-style', get_stylesheet_uri() );
    // JavaScript
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'getThemeScriptsAndStyles' );

require get_template_directory() . '/inc/post-type-project.php';