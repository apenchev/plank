<?php

if ( ! defined( 'PLANK_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'PLANK_VERSION', '1.0.0' );
}

// Sets up theme defaults and registers support for various WordPress features.
function plank_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => 'Primary',
		)
	);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
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
}
add_action( 'after_setup_theme', 'plank_setup' );

// Enqueue scripts and styles.
function plank_scripts() {
	wp_enqueue_style( 'plank-style', get_stylesheet_uri(), array(), PLANK_VERSION );
}
add_action( 'wp_enqueue_scripts', 'plank_scripts' );