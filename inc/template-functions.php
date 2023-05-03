<?php

function abyssaltheme_setup() {
    //rend le code valide pour HTML5.
    add_theme_support(
        'html5',
        array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        )
    );

        //affiche les images mise en avant dans le Back
        add_theme_support('post-thumbnails');

            /**
     * permet la prise en charge d'un logo personnalisé.
     * @link https://developer.wordpress.org/themes/functionality/custom-logo/
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}

function abyssaltheme_scripts_styles() {

	wp_enqueue_style( 'crd-style', get_template_directory_uri() . '/dist/css/style.css' );

	wp_enqueue_script( 'crd-vendors', get_template_directory_uri() . '/dist/js/vendors.js');
	wp_enqueue_script( 'crd-scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), '', true );
}

function abyssaltheme_register_menus() {
    register_nav_menus( array(
        'main-menu' => esc_html__( 'En-tête de page', 'abyssaltheme' ),
        'footer-menu' => esc_html__( 'Pied de page', 'abyssaltheme' )
    ) );
}
