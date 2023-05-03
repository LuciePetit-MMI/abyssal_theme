<?php

// Initialisation des fonctions personnalisées du thème.
add_action( 'after_setup_theme', 'abyssaltheme_setup' );
// File d'attente des styles et des scripts
add_action( 'wp_enqueue_scripts', 'abyssaltheme_scripts_styles' );
// Register the menu locations.
add_action( 'init', 'abyssaltheme_register_menus' );
